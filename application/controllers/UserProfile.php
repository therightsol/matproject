<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProfile extends CI_Controller {

    public function index()
    {
        $data = array();
        $data['validation_errors'] = '';
        $data['activepage'] = 'UserProfile';

        if(filter_input_array(INPUT_POST)){



            $this->load->library('form_validation');

            $config = array (
                array(
                    
                ),
                array(
                    'field'     =>  'dob',
                    'label'     =>  'Date Of Birth',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'intdi',
                    'label'     =>  'Interested In',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'religion',
                    'label'     =>  'Religion',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'lng',
                    'label'     =>  'Language',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'mothertongue',
                    'label'     =>  'Mother Tongue ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'lcountry',
                    'label'     =>  'Living In Country ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'lcity',
                    'label'     =>  'Living In City ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'bcountry',
                    'label'     =>  'Base In Country ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'bcity',
                    'label'     =>  'Base In City ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'sect',
                    'label'     =>  'Sect',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'profession',
                    'label'     =>  'Profession ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'interests',
                    'label'     =>  'Interests ',
                    'rules'     =>  'required'
                ),
                array(
                    'field'     =>  'aboutme',
                    'label'     =>  'About me ',
                    'rules'     =>  'required'
                ),


            );

            $this->form_validation->set_rules($config);

            if(! $this->form_validation->run() == FALSE){
                // When Success

                
                $dob   = $this->input->post('dob', True);
                $intdi      = $this->input->post('intdi', True);
                $aboutme      = $this->input->post('aboutme', True);
                $interests       = $this->input->post('interests', True);
                $profession    = $this->input->post('profession', True);
                $sect   = $this->input->post('sect', True);
                $lcountry   = $this->input->post('lcountry', True);
                $lcity   = $this->input->post('lcity', True);
                $bcountry   = $this->input->post('bcountry', True);
                $bcity  = $this->input->post('bcity', True);
                $mothertongue   = $this->input->post('mothertongue', True);
                $lng  = $this->input->post('lng', True);
                $religion   = $this->input->post('religion', True);

     
            }else {
                // when fails

                $data['validation_errors'] = validation_errors();

                $this->load->view('UserProfile', $data);

                //echo validation_errors();
            }






        }
        else {
            $this->load->view('UserProfile',$data);
        }
    }
}
