<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginpembeliController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginpembeliModel');
    }

    public function index()
    {
        $this->load->view('loginpembeliView');
    }

    public function aksi_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        // $nohp = htmlspecialchars($this->input->post('nohp'));
        $password = htmlspecialchars($this->input->post('password'));

        $ceklogin = $this->loginpembeliModel->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row) {
                $this->session->set_userdata('id1', $row->id_pembeli);
                $this->session->set_userdata('user1', $row->nama_pembeli);
                $this->session->set_userdata('nomer1', $row->no_hp_pembeli);
                $this->session->set_userdata('alamat1', $row->alamat_pembeli);
                $this->session->set_userdata('foto1', $row->foto_pembeli);
            }
            $id1 = $this->session->userdata('id1');

            redirect("homepembeliController/index/$id1");
        } else {
            $data['pesan'] = "username dan password anda salah";
            $this->load->view('loginpembeliView', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginpembeliController');
    }
}

/* End of file Controllername.php */
