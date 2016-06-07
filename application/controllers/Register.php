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
        $this->load->view('Register');

    }
}