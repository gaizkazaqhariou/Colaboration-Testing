<?php

defined('BASEPATH') or exit('No direct script access allowed');

class listorderController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user1') == '') {
            redirect('chooserController');
        }

        $this->load->model('rekapModel');
        $this->load->database();
    }

    public function index($id, $id_grup)
    {
        $data['listP'] = $this->rekapModel->detailPesanan($id, $id_grup);
        $this->load->view('listorderView', $data);
    }
}

/* End of file Controllername.php */
