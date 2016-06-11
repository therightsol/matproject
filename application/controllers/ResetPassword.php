<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResetPassword extends CI_Controller {

    public function index()
    {

        $data = array();
        $data['validation_errors'] = '';

        if(filter_input_array(INPUT_POST)){


            $this->load->library('form_validation');

            $config = array (
                array(
                    'field'     =>  'phone',
                    'label'     =>  'Mobile No.',
                    'rules'     =>  'required|exact_length[3]'
                ),
                array(
                    'field'     =>  'email',
                    'label'     =>  'Email',
                    'rules'     =>  'required|valid_email'
                ),

            );

            $this->form_validation->set_rules($config);

            if(! $this->form_validation->run() == FALSE){
                // When Success


                $phone      = $this->input->post('phone', True);
                $email      = $this->input->post('email', True);

                $this->load->model('user');



                $name = $phone . ' ' . $email;





            }else {
                // when fails

                $data['validation_errors'] = validation_errors();

                $this->load->view('ResetPassword', $data);

                //echo validation_errors();
            }




        }else{
            $this->load->view('ResetPassword', $data);

        }

    }
}
