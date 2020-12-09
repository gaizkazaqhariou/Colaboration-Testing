<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginModel');
    }

    public function index()
    {
        $this->load->view('loginView');
    }

    public function aksi_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $ceklogin = $this->loginModel->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row) {
                $this->session->set_userdata('id', $row->id_penjual);
                $this->session->set_userdata('user', $row->nama_penjual);
                $this->session->set_userdata('nomer', $row->no_hp_penjual);
                $this->session->set_userdata('password', $row->pass_penjual);
            }
            $id = $this->session->userdata('id');

            redirect("homepenjualController/index/$id");
        } else {
            $data['pesan'] = "username dan password anda salah";
            $this->load->view('loginView', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginController');
    }
}

/* End of file Controllername.php */
