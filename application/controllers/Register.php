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

        if(filter_input_array(INPUT_POST)){


            $this->load->library('form_validation');

            $config = array (
                array(
                    'field'     =>  'fname',
                    'label'     =>  'First Name',
                    'rules'     =>  'required|min_lenght[3]|max_lenght[7]'
                ),
                array(
                    'field'     =>  'lname',
                    'label'     =>  'Last Name',
                    'rules'     =>  'required|min_lenght[3]|max_lenght[7]'
                ),
                array(
                    'field'     =>  'un',
                    'label'     =>  'User Name',
                    'rules'     =>  'required|alpha_numeric|max_lenght[9]'
                ),
                array(
                    'field'     =>  'pass',
                    'label'     =>  'Password',
                    'rules'     =>  'required|min_lenght[8|max_lenght[16|alpha_numeric'
                ),
                array(
                    'field'     =>  'conpass',
                    'label'     =>  'confirm password',
                    'rules'     =>  'required|min_lenght[8]|max_lenght[16]|matches[pass]|alpha_numeric'
                ),
                array(
                    'field'     =>  'email',
                    'label'     =>  'E-mail ',
                    'rules'     =>  'valid_email'
                ),
                array(
                    'field'     =>  'phone',
                    'label'     =>  'Mobile No. ',
                    'rules'     =>  'numeric|exact_lenght[11]|required'
                ),

            );

            $this->form_validation->set_rules($config);

            if(! $this->form_validation->run() == FALSE){
                // When Success
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
}