<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class editorderController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rekapModel');
        $this->load->database();
    }
    
    public function index($id_penjual, $id_grup)
    {
    	$data['id_grup'] = $id_grup;
        $data['listB'] = $this->produkModel->produkPenjual($id_penjual);
        $this->load->view('editorderView');
    }

    public function editOrder(){
    	$id_pesanan = $this->input->post('id_pesanan');
    	$id_grup = $this->input->post('id_grup');
        $id_pembeli = $this->session->userdata('id1');
        $id_barang = $this->input->post('id_barang');
        $jumlah = $this->input->post('qty');
        $waktu = $this->input->post('waktu');

        $data = array(
            'id_grup' => $id_grup,
            'id_pembeli' => $id_pembeli,
            'id_barang' => $id_barang,
            'jumlah_barang' => $jumlah,
            'tanggal_pesan' => $waktu
        );

        $where = array(
        	'id_pesanan'=>$id_pesanan
        );

        $this->rekapModel->update_data($where, $data, 'pesanan');
        redirect("listorderController/index/$id_pembeli/$id_grup");
    }

}

/* End of file Controllername.php */
