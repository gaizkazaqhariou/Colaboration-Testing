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
        $satuan = $this->session->post('satuan');

        $data = array(
            'nama_grup' => $nama_grup,
            'kode_grup' => $kode_grup,
            'pemilik_grup' => $pemilik_grup
        );

        $this->addgrupModel->input_data($data,'grup_jual');
        redirect("grupController/index/$pemilik_grup");
    }
}

/* End of file Controllername.php */
?>