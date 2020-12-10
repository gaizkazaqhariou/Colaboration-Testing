<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginadminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginadminModel');
    }

    public function index()
    {
        $this->load->view('loginadminView');
    }

    public function aksi_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $ceklogin = $this->loginadminModel->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row) {
                $this->session->set_userdata('id3', $row->id_admin);
                $this->session->set_userdata('user3', $row->username);
            }
            $id = $this->session->userdata('id3');

            redirect("adminController/index/$id");
        } else {
            $data['pesan'] = "username dan password anda salah";
            $this->load->view('loginadminView', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginadminController');
    }
}

/* End of file Controllername.php */
