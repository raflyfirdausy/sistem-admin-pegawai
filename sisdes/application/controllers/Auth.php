<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        redirect(base_url("auth/login"));
    }

    public function login(){
        $this->load->view('auth/login');
    }
}