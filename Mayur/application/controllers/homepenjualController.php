<?php

defined('BASEPATH') or exit('No direct script access allowed');

class homepenjualController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('penjualModel');
        $this->load->model('produkModel');
        $this->load->database();
    }

    public function index($id_penjual)
    {
        // $id_penjual = $this->session->flashdata("id_penjual");
        $this->session->set_userdata('id', $id_penjual);

        $data['datapenjual'] = $this->penjualModel->dataPenjual($id_penjual);
        $data['total'] = $this->penjualModel->getTotalGrup($id_penjual);
        $data['dataproduk'] = $this->penjualModel->dataProduk($id_penjual);
        $data['totalProduk'] = $this->penjualModel->getTotalProduk($id_penjual);

        $this->load->view('homepenjualView', $data);
    }


}

/* End of file Controllername.php */