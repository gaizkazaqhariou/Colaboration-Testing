<?php

defined('BASEPATH') or exit('No direct script access allowed');

class produkController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('produkModel');
        $this->load->database();
    }

    public function index($id)
    {
        $data['produkP'] = $this->produkModel->produkPenjual($id);
        // $data['namaP'] = $this->produkModel->namaProduk($id_barang);
        $data['id'] = $this->session->userdata('id');
        $this->load->view('produkView', $data);
    }

    public function hapus($id)
    {
        $where = array('id_barang' => $id);
        $this->produkModel->hapus_data($where, 'barang');
        $id_penjual = $this->session->userdata('id');
        redirect("produkController/index/$id_penjual");
    }

    public function edit($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $data['produk'] = $this->produkModel->edit_data($where, 'barang')->result();
        $this->load->view('editprodukView', $data);
    }
}

/* End of file Controllername.php */
