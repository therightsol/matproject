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









                                /*
                                 * Do not change this code -- Class Code - Under Development
                                 */
                    $rec = array('username' => $username,);
                    $db_record = $this->user->getSpecificColumnRec(false, $rec);
                    echo '<pre>'.var_export($db_record, true).'</pre>';exit;
                    // checking is email found or not and user is active.
                    $username_found = '';
                    $email_verify = '';
                    if($db_record){

                        if($db_record[0]['is_approved_by_admin'] != 1){

                            $data['is_admin_approved'] = 'no';

                        }else{
                            $username_found = 'yes';
                        }
                        if($db_record[0]['is_email_verified'] != 1){

                            $data['is_email_approved'] = 'no';

                        }else{
                            $email_verify = 'yes';
                        }
                    }  else {
                        $data['record_found'] = 'email_not_found';
                    }

                    if ($username_found == '' || $email_verify == '') {


                        $this->load->view('login_member', $data);
                    } else {
                        // user found. show error. user already available.

                        $dbPass = $db_record[0]['password'];
                        $db_username = $db_record[0]['username'];
                        $db_user_id = $db_record[0]['uid'];

                        $input_password = $this->input->post('password', True);

                        if ($input_username == $db_username && password_verify($input_password, $dbPass)) {


                            if ($db_record[0]['is_admin'] == 1) {
                                $loggedInUser = 'admin';
                            }
                           elseif ($db_record[0]['is_organization'] == 1) {
                                $loggedInUser = 'is_organization';
                            }

                            $this->load->library('session');
                            /*
                             *  saving session. because session is secure and will save on server side.
                             * takes 2 parameters. Key and Value
                             */
                            $this->session->set_userdata('username', $input_username);
                            $this->session->set_userdata('loggedInUser', $loggedInUser);


                            redirect('Home');
                        } else {
                            $data['record_found'] = 'password_not_match';
                            $this->load->view('login_member', $data);
                            //echo 'password is wrong';
                        }
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
