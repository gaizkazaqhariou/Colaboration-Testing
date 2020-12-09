<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class editprodukController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('editprodukModel');
        $this->load->database();
    }
    
    public function index()
    {
        $this->load->view('editprodukView');
    }

    public function editProduk(){
    	$id_barang = $this->input->post('id_barang');
    	$nama_barang = $this->input->post('nama_barang');
        $harga = $this->input->post('harga');
        $satuan = $this->input->post('satuan');
        $pemilik_barang = $this->session->userdata('id');

        $data = array(
            'nama_barang' => $nama_barang,
            'harga' => $harga,
            'satuan' => $satuan,
            'pemilik_barang' => $pemilik_barang
        );

        $where = array(
        	'id_barang'=>$id_barang
        );

        $this->editprodukModel->update_data($where, $data,'barang');
        redirect("produkController/index/$pemilik_barang");
    }
}

/* End of file Controllername.php */
?>