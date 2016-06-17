<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index()
    {
        $data['activepage'] = 'search';
        $this->load->view('search', $data);

    }
}
