<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function index()
    {
        $data['activepage'] = 'update';

        $this->load->view('update', $data);

    }
}
