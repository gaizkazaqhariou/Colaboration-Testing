<?php

defined('BASEPATH') or exit('No direct script access allowed');

class detailController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('detailModel');
        $this->load->database();
    }

    public function index($id_grup)
    {
        $data['id_grup'] = $id_grup;
        $data['listP'] = $this->detailModel->listPesanan($id_grup);
        $this->load->view('detailView', $data);
    }
}

/* End of file Controllername.php */
