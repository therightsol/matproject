<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

    public function index()
    {

        $data = array();
        $data['validation_errors'] = '';
        $data['activepage'] = 'signin';

        if(filter_input_array(INPUT_POST)){


            $this->load->library('form_validation');

            $config = array (
                array(
                    'field'     =>  'un',
                    'label'     =>  'Username',
                    'rules'     =>  'required|trim'
                ),
                array(
                    'field'     =>  'pass',
                    'label'     =>  'Password',
                    'rules'     =>  'required|trim'
                ),

            );

            $this->form_validation->set_rules($config);

            if(! $this->form_validation->run() == FALSE){
                // When Success


                $username      = $this->input->post('un', True);
                $pass     = $this->input->post('pass', True);

                $this->load->model('user');


                $dbrecord = $this->user->getRecord($username, 'username');

                $dbusername = $dbrecord->username;
                $dbPass = $dbrecord->password;

                if($dbusername == $username && password_verify($pass, $dbPass)){
                    // make session and redirect

                    $this->load->library('session');
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('firstname', $dbrecord->firstName);
                    $this->session->set_userdata('lastname', $dbrecord->lastName);
                    $this->session->set_userdata('email', $dbrecord->email);
                    $this->session->set_userdata('uid', $dbrecord->uid);


                    redirect('member');



                }else {
                    // display error that provided username or password was wrong.
                    $data['wrong_un_pass'] = 'Wrong username or password!';
                    $this->load->view('signin', $data);
                }







            }else {
                // when fails

                $data['validation_errors'] = validation_errors();

                $this->load->view('signin', $data);

                //echo validation_errors();
            }




        }else{
            $this->load->view('signin', $data);

        }

    }
}
