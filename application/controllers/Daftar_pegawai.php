<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_pegawai extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $level_user = $this->global_data['user_data']->level_user;
        
        if ($level_user == 3) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $jenis = $this->input->get('jenis');
        $dataPegawai    = $this->m_data->getWhere("level_user", "3");
        if (!empty($jenis) && $jenis != "semua") {
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
        if ($insert > 0) {
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

    public function ubah_data()
    {
        $id_pegawai     = $this->input->post('id_pegawai');
        $username       = $this->input->post('username');
        $nama_pegawai   = $this->input->post('nama_pegawai');
        $jabatan_user   = $this->input->post('jabatan_user');
        $password       = $this->input->post('password');

        $dataUpdate     = [
            "nama_user"     => $nama_pegawai,
            "jabatan_user"  => $jabatan_user
        ];

        if (!empty($password)) {
            $dataUpdate["password_user"] = md5($password);
        }

        $update     = $this->m_data->update("user", $dataUpdate, ["id_user" => $id_pegawai]);
        if ($update > 0) {
            $this->session->set_flashdata("sukses", "Berhasil mengubah data pegawai pada database");
        } else {
            $this->session->set_flashdata("gagal", "Gagal mengubah data pegawai pada database");
        }
        redirect(base_url('daftar-pegawai'));
    }

    public function hapus_data()
    {
        $id_pegawai     = $this->input->post('id_pegawai');

        $delete     = $this->m_data->delete(["id_user" => $id_pegawai], "user");
        if ($delete > 0) {
            $this->session->set_flashdata("sukses", "Berhasil menghapus data pegawai pada database");
        } else {
            $this->session->set_flashdata("gagal", "Gagal menghapus data pegawai pada database");
        }
        redirect(base_url('daftar-pegawai'));
    }
}
