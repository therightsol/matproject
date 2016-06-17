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
                    'rules'     =>  'required|'
                ),
                array(
                    'field'     =>  'pass',
                    'label'     =>  'Password',
                    'rules'     =>  'required|'
                ),

            );

            $this->form_validation->set_rules($config);

            if(! $this->form_validation->run() == FALSE){
                // When Success


                $username      = $this->input->post('un', True);
                $pass     = $this->input->post('pass', True);

                $this->load->model('user');



                $name = $username . ' ' . $pass;





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
