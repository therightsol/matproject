<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index()
    {
        $data['activepage'] = 'search';

        $this->load->model('user');


        $User = $this->user->getRecord('username');
        $data['username'] = $User;
        $this->load->view('search', $data);
    }
}