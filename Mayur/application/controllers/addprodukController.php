<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class addprodukController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('addprodukModel');
		$this->load->database();
    }
    
    public function index()
    {
        $this->load->view('addprodukView');
    }


    public function tambahProduk(){
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

        $this->addprodukModel->input_data($data,'barang');
        redirect("produkController/index/$pemilik_barang");
    }
}

/* End of file Controllername.php */
?>