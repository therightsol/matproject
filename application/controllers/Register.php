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

            if(! $this->form_validation->run() == FALSE){
                // When Success

                /*
                 * getting record from register form
                 */
                $fname      = $this->input->post('fname', True);
                $lastname   = $this->input->post('lname', True);
                $phone      = $this->input->post('phone', True);
                $email      = $this->input->post('email', True);
                $pass       = $this->input->post('pass', True);
                $username   = $this->input->post('un', True);

                $options = [
                    'cost' => 10
                ];
                $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);


                /*$md5pass = md5($pass);

                $both = $hashedPassword . '<br />' . $md5pass;
                exit($both);*/

                    /*
                     * loading model(s)
                     */
                $this->load->model('user');


                /*
                 * saving record
                 */

                $this->user->firstName = $fname;
                $this->user->lastName = $lastname;
                $this->user->email = $email;
                $this->user->username = $username;
                $this->user->phoneNumber = $phone;
                $this->user->password = $hashedPassword;





                $this->user->insertRecord();



                /*
                 * sending email
                 *
                 */


                $this->load->library('email');

                $result = $this->email
                    ->from('trsolutions.trainingcenter@gmail.com')
                    ->reply_to('trsolutions.trainingcenter@gmail.com')    // Optional, an account where a human being reads.
                    ->to($email)
                    ->subject('Welcome to Matrimonial Service')
                    ->message('<h1>Please verify you account.')
                    ->send();

                var_dump($result);
                echo '<br />';
                echo $this->email->print_debugger();









            }else {
                // when fails

                $data['validation_errors'] = validation_errors();

                $this->load->view('register', $data);

                //echo validation_errors();
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
}