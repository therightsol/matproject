<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

    public function index() {
        redirect('home');

    }

    public function email($uid = '') {
        
        $data['activepage'] = 'verify';

        $base_enc_username = $uid;
        $data['uid_empty'] = '';
        $data['user_notfound'] = '';
        $data['email_verify'] = '';
        $data['base_enc_username'] = '';
        $data['email_alredy_verified'] = '';
        
        
        
        if ($base_enc_username != '') {
            $enc_username = base64_decode($base_enc_username);


            $this->load->library('encrypt');
            $this->load->model('basic_functions');
            $key = $this->basic_functions->getEncryptionKey();

            $plain_username = $this->encrypt->decode($enc_username, $key);

            //echo $plain_username;
            // updateRecord($columnName = 'customerID', $data='' , $update_where='', $nameOfUpdatingColumn=False)
            $this->load->model('user');

            if ($plain_username != "") {
                $db_all_usernames = $this->user->getRecord($plain_username, 'username');

                //echo var_export($db_all_usernames);


                if (!empty($db_all_usernames)) {
                    // update
                    $updateData = array(
                        'isemailverified' => 1
                    );

                    $isSuccess = $this->user->updateRecord('username', $updateData, $plain_username);

                    if ($isSuccess) {
                        $data['email_verify'] = 'yes';
                        $this->load->view('verify', $data);

                        }else{
                       $db_userRecord = $this->user->getRecord($plain_username, 'username');
                        //echo '<tt><pre>' . var_export($db_userRecord,TRUE) . '</tt></pre>';
                        if ($db_userRecord != ''){
                            $emailverify = 0;  // Default value
                         foreach($db_userRecord as $column => $value){
                            if($column == 'isemailverified')
                                $emailverify = $value;
                         }
                        if ($emailverify == 1){
                            /*
                             * display message that you token has been expired
                             */
                            $data['email_alredy_verified'] = 'yes';
                            $this->load->view('verify', $data);
                        }
                        }
                        // some DB related issue. Every thing is fine but DB related error.   
                    }
                        
                } else {
                    // user not found
                    //echo "user not found";
                    //echo $username;
                    $data['user_notfound'] = 'yes';
                    $this->load->view('verify', $data);
                }
            } else {
                // user not found because this is blank username
                // echo " user is blank";
                $data['uid_empty'] = 'yes';
                $this->load->view('verify', $data);
            }
        } else {
            // uid is empty. uid is changed
            $data['base_enc_username'] = 'yes';
            $this->load->view('verify', $data);
            // echo "Email not verified because of some internal error. ERROR #1001";
        }
    
    }




}
