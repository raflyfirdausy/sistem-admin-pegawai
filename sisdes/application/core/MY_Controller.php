<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $CI = &get_instance();

        $this->global_data = [
            "app_name"          => "Sisdes",
            "app_complete_name" => "Sistem Informasi Desa",
            "CI"                => $CI,
            "aktif"             => NULL,
            "_session"          => $CI->session->userdata("login"),
            "title"             => ucwords($this->router->fetch_class())
        ];
    }

    public function loadView($view = NULL, $local_data = array(), $asData = FALSE){
        $data = array_merge($this->global_data, $local_data);
        return $this->load->view($view, $data, $asData);
    }
}