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
        $jenis = $this->input->get('jenis');
        $dataPegawai    = $this->m_data->getWhere("level_user", "3");
        if(!empty($jenis) && $jenis != "semua"){
            $dataPegawai    = $this->m_data->getWhere("jabatan_user", $jenis);
        }
        $dataPegawai    = $this->m_data->order_by("id_user", "DESC");
        $dataPegawai    = $this->m_data->getData("user")->result();

        $data["dataPegawai"]   = $dataPegawai;
        $this->loadViewAdmin("dashboard/daftar_pegawai", $data);
    }

    public function tambah_pegawai()
    {
        $nama_pegawai    = $this->input->post("nama_pegawai");
        $jabatan_pegawai = $this->input->post("jabatan_pegawai");

        $pecah          = explode(' ', $nama_pegawai);
        $username       = strtolower($pecah[0] . $pecah[1]);
        
        $data = [
            "nama_user"         => $nama_pegawai,
            "username_user"     => strtolower($this->getUniqueUsername($username)),
            "password_user"     => md5("12345678"),
            "jabatan_user"      => $jabatan_pegawai,
            "level_user"        => 3
        ];

        $insert = $this->m_data->insert("user", $data);
        if($insert > 0){
            $this->session->set_flashdata("sukses", "Berhasil menambah data pegawai pada database");            
        } else {
            $this->session->set_flashdata("gagal", "Gagal menambah data pegawai pada database");
        }
        redirect(base_url('daftar-pegawai'));
    }

    public function getUniqueUsername($username, $percobaan = 1)
    {
        $cekUsername    = $this->m_data->getWhere("username_user", $username);
        $cekUsername    = $this->m_data->getData("user")->row();    
        if ($cekUsername) {
            $username = preg_replace('/[^a-zA-Z]/i', '', $username);
            return $this->getUniqueUsername($username . $percobaan, ++$percobaan);
        } else {
            return $username;
        }
    }
}
