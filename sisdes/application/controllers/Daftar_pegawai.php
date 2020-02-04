<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_pegawai extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {        
        $this->loadViewAdmin("dashboard/daftar_pegawai");
    }
}
