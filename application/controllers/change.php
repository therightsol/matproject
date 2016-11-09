<?php
/**
 * Created by PhpStorm.
 * User: FURQAN AFZAL
 * Date: 6/4/2016
 * Time: 12:00 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Change extends CI_Controller {

    public function index() {
        /* this commit is on master */
        /* This is by ali shan on alishan - test branch ... */
        redirect('home');
        /*Here comment is closes on alishan - branch :P just testing buddy*/
    }


    public function pass($email = '')
    {


        $data = array();
        $data['validation_errors'] = '';
        $data['activepage'] = 'changepass';
        $data['message_display']='';
        $base_enc_email = $email;
        $data['uid_empty'] = '';
        $data['user_notfound'] = '';
        $data['base_enc_username'] = '';
        $data['email'] = $email;
        $data['updateOK']= '';

        if (filter_input_array(INPUT_POST)) {


            $this->load->library('form_validation');

            $config = array(

                array(
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'required|min_length[8]|max_length[255]|alpha_numeric'
                ),
                array(
                    'field' => 'conpass',
                    'label' => 'confirm password',
                    'rules' => 'required|min_length[8]|max_length[255]|matches[pass]|alpha_numeric'
                )

            );




            $this->form_validation->set_rules($config);


            if (!$this->form_validation->run() == FALSE) {
                // When Success

                /*
                 * Getting Email address from Encoded string.
                 */
                // Loading encryption library to encrypt username
                $this->load->library('encrypt');

                $this->load->model('basic_functions');
                $encryptionKey = $this->basic_functions->getEncryptionKey();

                $encodedEmail = base64_decode($base_enc_email);   // changing username to base64 algo.
                $email = $this->encrypt->decode($encodedEmail, $encryptionKey);
                //echo($email) . '<br /><br />'; exit;



                /*
                 * getting record from register form
                 */
                $pass = $this->input->post('pass', True);


                /*
                 * loading model(s)
                 */
                $this->load->model('user');


                $isEmailFound = $this->user->getRecord($email, 'email');

                if (! empty($isEmailFound)) {
                    // We can create user.
                    $options = [
                        'cost' => 10
                    ];
                    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);

                    /*
                     * Updating record
                     */

                    $arr = array(
                      'password' => $hashedPassword
                    );
                    $isSuccess = $this->user->updateRecord('email', $arr, $email);



                    if($isSuccess){
                        // sends email
                        /*
                        * sending email
                        *
                        */
                        $result = $this->send_email( $email );

                        if ($result) {
                            $data['updateOK'] = 'yes';
                            $this->load->view('changepass', $data);
                        } else {
                            // show error.
                            // Some internal error occured . Please contact to admin.

                        }

                    }else {
                        // Display error.
                        // Some internal error occured.
                    }
                } else {
                    // Show errors.

                    // Username / email is already registered.

                    $data['message_display'] = 'Sorry! Provided Username or Email is not Aavailable ';
                    $this->load->view('changepass', $data);



                }


            } else {
                // when fails
                $data['validation_errors'] = validation_errors();

                $this->load->view('changepass', $data);


            }


        } else {
            $this->load->view('changepass', $data);

        }

    }



    /*
     * Sends Confirmation Emails
     */
    private function send_email($userEmail){
        /*
         * Send Email is Pending
         *  i)  Confirmation of email account.
         *  ii) if email is confirmed by user by clicking on confirmation link then,
         *          -->     send email to Admin that a new user has been created. And set privilages for this user.
         */


        $message = '<strong> Password Changed! </strong><br /><br />'
            . 'You are successfully updated your password. <br /><br /><br /><hr />'
            . '<strong> Team MatProject</strong><br /><br />';

        $this->load->library('email');

        $result = $this->email
            ->from('trsolutions.trainingcenter@gmail.com')
            ->reply_to('trsolutions.trainingcenter@gmail.com')    // Optional, an account where a human being reads.
            ->to($userEmail)
            ->subject('Password Updated')
            ->message($message)
            ->send();

        return $result;

    }
}
