<?php

defined('BASEPATH') or exit('No direct script access allowed');

class sayurController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user1') == '') {
            redirect('chooserController');
        }

        $this->load->model('produkModel');
        $this->load->database();
    }

    public function index($id_penjual)
    {
        $data['produkP'] = $this->produkModel->produkPenjual($id_penjual);
        $this->load->view('sayurView', $data);
    }

    public function allproduk()
    {
        $data['produkP'] = $this->produkModel->produkAll();
        $this->load->view('sayurView', $data);
    }
}

/* End of file Controllername.php */
