<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen_pegawai extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadViewAdmin("dashboard/dokumen_pegawai");
    }

    public function detail($username = NULL){
        $this->loadViewAdmin("dashboard/detail_dokumen");
    }

    public function lengkapi($username = NULL){
        $this->loadViewAdmin("dashboard/lengkapi_dokumen");
    }
}
