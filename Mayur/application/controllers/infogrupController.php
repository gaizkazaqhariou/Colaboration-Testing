<?php

defined('BASEPATH') or exit('No direct script access allowed');

class infogrupController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('infoModel');
        $this->load->database();
    }

    public function index($id_grup)
    {
        $this->session->set_userdata('id_grup', $id_grup);

        $data['totalG'] = $this->infoModel->getTotalGrup($id_grup);
        $data['totalP'] = $this->infoModel->getTotalPesanan($id_grup);
        $this->load->view('infogrupView', $data);
    }
}

/* End of file Controllername.php */
