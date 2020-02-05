<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen_pegawai extends Admin_Controller
{
    private $user;
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->global_data['user_data'];
    }

    public function index()
    {

        redirect("dokumen-pegawai/detail");
    }

    public function detail($username = NULL)
    {

        if (empty($username)) {
            if ($this->user->level_user == 3) {
                redirect(base_url("dokumen-pegawai/detail/" . $this->user->username_user));
            } else {
                redirect("daftar-pegawai");
            }
        } else {
            $cekUser    = $this->m_data->getWhere("username_user", $username);
            $cekUser    = $this->m_data->getData("user")->row();
            if (!$cekUser) {
                redirect("daftar-pegawai");
            } else {
                if ($this->user->level_user == 3) {
                    if ($username != $this->user->username_user) {
                        redirect("dokumen-pegawai/detail");
                    }
                }
            }
        }

        $user_detail    = $this->m_data->getWhere("username_user", $username);
        $user_detail    = $this->m_data->getData("user")->row();

        $dokumen        = $this->m_data->getWhere("id_user", $user_detail->id_user);
        $dokumen        = $this->m_data->getData("file")->result();

        $data["user_detail"]    = $user_detail;
        $data["dokumen"]        = $dokumen;

        $this->loadViewAdmin("dashboard/detail_dokumen", $data);
    }

    public function lengkapi($username = NULL)
    {
        if ($this->user->level_user == 3) {
            if (empty($username)) {
                redirect(base_url("dokumen-pegawai/lengkapi/" . $this->user->username_user));
            } else {
                $cekUser    = $this->m_data->getWhere("username_user", $username);
                $cekUser    = $this->m_data->getData("user")->row();
                if (!$cekUser) {
                    redirect(base_url("dokumen-pegawai/lengkapi/" . $this->user->username_user));
                } else {
                    if ($username != $this->user->username_user) {
                        redirect(base_url("dokumen-pegawai/lengkapi/" . $this->user->username_user));
                    }
                }
            }
        } else {
            redirect("daftar-pegawai");
        }


        $user_detail    = $this->m_data->getWhere("username_user", $username);
        $user_detail    = $this->m_data->getData("user")->row();

        $data["user_detail"]    = $user_detail;
        $this->loadViewAdmin("dashboard/lengkapi_dokumen", $data);
    }

    public function update_dokumen(){
        d($this->input->post());
    }
}
