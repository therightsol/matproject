<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function index()
    {
        $data['activepage'] = 'member';

        $this->load->view('member', $data);

    }
}
