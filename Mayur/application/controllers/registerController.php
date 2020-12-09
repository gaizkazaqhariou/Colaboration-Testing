<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class registerController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('registerModel');
		$this->load->database();
    }
    
    public function index()
    {
        $this->load->view('registerView');
    }

    public function tambahPenjual(){
    	$nama_pembeli = $this->input->post('nama_penjual');
        $no_hp_pembeli = $this->input->post('no_hp_penjual');
        $alamat_pembeli = $this->input->post('alamat_penjual');
        $pass_pembeli = $this->input->post('pass_penjual');
        $foto_pembeli = $this->input->post('foto_penjual');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama_penjual' => $nama_pembeli,
            'no_hp_penjual' => $no_hp_pembeli,
            'alamat_penjual' => $alamat_pembeli,
            'pass_penjual' => $pass_pembeli,
            'foto_penjual' => $foto_pembeli,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi
        );

        $this->registerModel->input_data($data,'penjual');
        redirect('loginController');
    }
}

/* End of file Controllername.php */
?>