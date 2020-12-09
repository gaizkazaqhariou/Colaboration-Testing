<?php

defined('BASEPATH') or exit('No direct script access allowed');

class listanggotaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('grupModel');
        $this->load->model('infoModel');
        $this->load->database();
    }

    public function index($id_grup)
    {
        $data['anggota'] = $this->grupModel->anggotaGrup($id_grup);
        $data['namaG'] = $this->infoModel->getdataGrup($id_grup);
        $this->load->view('listanggotaView', $data);
    }
}

/* End of file Controllername.php */
