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
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3048;
        $this->load->library('upload', $config);

        if (!empty($_FILES['foto_barang'])) {
            $this->upload->do_upload('foto_barang');
            $foto_barang = $this->upload->data("file_name");
        }

    	$id_barang = $this->input->post('id_barang');
    	$nama_barang = $this->input->post('nama_barang');
        $harga = $this->input->post('harga');
        $satuan = $this->input->post('satuan');
        $pemilik_barang = $this->session->userdata('id');

        $data = array(
            'nama_barang' => $nama_barang,
            'harga' => $harga,
            'satuan' => $satuan,
            'pemilik_barang' => $pemilik_barang,
            'foto_barang' => $foto_barang
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