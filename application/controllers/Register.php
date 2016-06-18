<?php
/**
 * Created by PhpStorm.
 * User: FURQAN AFZAL
 * Date: 6/4/2016
 * Time: 12:00 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {



        $data = array();
        $data['validation_errors'] = ''; 
        $data['activepage'] = 'register';
        if(filter_input_array(INPUT_POST)){


            $this->load->library('form_validation');

            $config = array (
                array(
                    'field'     =>  'fname',
                    'label'     =>  'First Name',
                    'rules'     =>  'required|min_length[3]|max_length[100]'
                ),
                array(
                    'field'     =>  'lname',
                    'label'     =>  'Last Name',
                    'rules'     =>  'required|min_length[3]|max_length[100]'
                ),
                array(
                    'field'     =>  'un',
                    'label'     =>  'User Name',
                    'rules'     =>  'required|alpha_numeric|max_length[9]'
                ),
                array(
                    'field'     =>  'pass',
                    'label'     =>  'Password',
                    'rules'     =>  'required|min_length[8]|max_length[16]|alpha_numeric'
                ),
                array(
                    'field'     =>  'conpass',
                    'label'     =>  'confirm password',
                    'rules'     =>  'required|min_length[8]|max_length[16]|matches[pass]|alpha_numeric'
                ),
                array(
                    'field'     =>  'email',
                    'label'     =>  'E-mail ',
                    'rules'     =>  'valid_email|required'
                ),
                array(
                    'field'     =>  'phone',
                    'label'     =>  'Mobile No. ',
                    'rules'     =>  'numeric|exact_length[13]|required'
                ),

            );

            $this->form_validation->set_rules($config);

            if( $this->form_validation->run() == FALSE){
                // When Success

                /*
                 * getting record from register form
                 */

                $email      = $this->input->post('email', True);
                $pass       = $this->input->post('pass', True);
                $username   = $this->input->post('un', True);


                /*
                 * loading model(s)
                 */
                $this->load->model('user');


                $isUserFound = $this->user->getRecord($username, 'username');
                $isEmailFound = $this->user->getRecord($email, 'email');

                if(empty($isUserFound) && empty($isEmailFound)){
                    // We can create user.
                    $options = [
                        'cost' => 10
                    ];
                    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);

                    /*
                     * saving record
                     */

                    $this->user->email = $email;
                    $this->user->username = $username;
                    $this->user->password = $hashedPassword;


                    $this->user->insertRecord();



                    /*
                     * sending email
                     *
                     */
                    $result = $this->send_email($username, $email);

                    if($result){
                        // Show message.
                        // Please verify your account
                    }else {
                        // show error.
                        // Some internal error occured . Please contact to admin.
                    }














                }else {
                    // Show errors.

                    // Username / email is already registered.
                }




            }else {
                // when fails

                echo validation_errors();exit;
                $data['validation_errors'] = validation_errors();

                $this->load->view('register', $data);


            }




        }else{
            $this->load->view('Register', $data);

        }

    }

    public function checkusername(){
        // data base

        $username = $_POST['un'];

        $data = array('alishan','faheem');

        if(in_array($username, $data)){
            echo 'username is not available.';
        }else {
            echo 'Congratulations! ' . $username . ' is available';
        }
    }


    /*
     * Sends Verifications Emails
     */
    private function send_email($username, $userEmail){
        /*
         * Send Email is Pending
         *  i)  Confirmation of email account.
         *  ii) if email is confirmed by user by clicking on confirmation link then,
         *          -->     send email to Admin that a new user has been created. And set privilages for this user.
         */

        // Loading encryption library to encrypt username
        $this->load->library('encrypt');

        $this->load->model('basic_functions');
        $encryptionKey = $this->basic_functions->getEncryptionKey();
        //exit($encryptionKey);

        $encrypteUserName = $this->encrypt->encode($username, $encryptionKey);
        //echo($encrypteUserName) . '<br /><br />';


        $base64userName = base64_encode($encrypteUserName);   // changing username to base64 algo.
        //echo $base64userName; exit();

        $url = base_url() . 'verify/email/' . $base64userName;

        $message = '<strong> Welcome! ' . $username . ' </strong><br /><br />'
            . 'You are successfully registered. Please verify your account by clicking on below url. <br />'
            . $url . '<br /><br /><br /><br /><br /><br /><br /><hr />'
            . '<strong> Team MatProject</strong><br /><br />';

        $this->load->library('email');

        $result = $this->email
            ->from('trsolutions.trainingcenter@gmail.com')
            ->reply_to('trsolutions.trainingcenter@gmail.com')    // Optional, an account where a human being reads.
            ->to($userEmail)
            ->subject('Welcome to Matrimonial Service')
            ->message($message)
            ->send();

        return $result;



    }
}