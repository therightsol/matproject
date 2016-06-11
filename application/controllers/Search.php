<?php
/**
 * Created by PhpStorm.
 * User: Syed
 * Date: 6/11/2016
 * Time: 1:41 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index()
    {
        $this->load->view('search');

    }
}
