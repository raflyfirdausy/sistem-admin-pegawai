<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ganti_password extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadViewAdmin("dashboard/ganti_password");
    }
}
