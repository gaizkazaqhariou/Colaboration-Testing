<?php

defined('BASEPATH') or exit('No direct script access allowed');

class onegrupController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user1') == '') {
            redirect('chooserController');
        }

        $this->load->model('grupModel');
        $this->load->model('infoModel');
        $this->load->database();
    }

    public function index($id, $id_grup)
    {
        $data['id_grup'] = $id_grup;

        $data['jmlP'] = $this->infoModel->getJmlPesanan($id, $id_grup);
        $data['anggota'] = $this->grupModel->anggotaGrup($id);

        $this->load->view('onegrupView', $data);
    }
}

/* End of file Controllername.php */
