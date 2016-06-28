<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Via_email extends CI_Controller {

    public function index()
    {
        $data = array();
        $data['activepage'] = 'via_email';
        $data['validation_errors'] = '';
        $data['resetOK'] = '';
        $data['message_display']='';


        if(filter_input_array(INPUT_POST)){


            $this->load->library('form_validation');

            $config = array (

                array(
                    'field'     =>  'email',
                    'label'     =>  'Email',
                    'rules'     =>  'required|valid_email'
                ),

            );

            $this->form_validation->set_rules($config);

            if(!$this->form_validation->run() == FALSE){
                // When Success

                $email = $this->input->post('email', True);

                $this->load->model('user');
//                $a = $this->user->getRecord($email,'email');
//                var_export($a->email);


                $isEmailFound = $this->user->getRecord($email, 'email');

//               print_r($isEmailFound);


                if (!empty($isEmailFound)) {
                    // We can create user.
//                    $options = [
//                        'cost' => 10
//                    ];
//                    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);

                    /*
                     * saving record
                     */

                    $this->user->email = $email;
//                    echo 'Email is already registered ';

//                    $this->user->username = $username;
//                    $this->user->password = $hashedPassword;


//                    $this->user->insertRecord();


                    /*
                     * sending email
                     *
                     */
                    $result = $this->send_email($email);

                    if ($result) {
                        // Show message.
                        $data['resetOK'] = 'yes';
                        $this->load->view('via_email', $data);
//                        echo 'successfuly send your email';
                        // Please verify your account

                    } else {
                        // show error.

                        // Some internal error occured . Please contact to admin.

                    }


                } else {
                    // Show errors.
                    $data['message_display'] = 'Sorry! Provided Email is not Aavailable ';
                    $this->load->view('via_email', $data);

                    // Username / email is already registered.
//                    echo 'Email is not Registered, Please sign up ur account';
                }

            }




            else {
                // when fails

                $data['validation_errors'] = validation_errors();

                $this->load->view('via_email', $data);

                //echo validation_errors();
            }




        }else{
            $this->load->view('via_email', $data);
            
        }

    }

    /*
     * Sends Verifications Emails
     */
    private function send_email($email){
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

        $encrypteEmail = $this->encrypt->encode($email, $encryptionKey);
        //echo($encrypteUserName) . '<br /><br />';


        $base64email = base64_encode($encrypteEmail);   // changing username to base64 algo.
        //echo $base64userName; exit();

        $url = base_url() . 'change/pass/' . $base64email;

        $message = '<strong> Welcome! </strong><br /><br />'
            . 'Reset your password. Please reset your password by clicking on below url. <br />'
            . $url . '<br /><br /><br /><br /><br /><br /><br /><hr />'
            . '<strong> Team MatProject</strong><br /><br />';

        $this->load->library('email');

        $result = $this->email
            ->from('trsolutions.trainingcenter@gmail.com')
            ->reply_to('trsolutions.trainingcenter@gmail.com')    // Optional, an account where a human being reads.
            ->to($email)
            ->subject('Reset Your Password')
            ->message($message)
            ->send();

        return $result;



    }



}
