<?php

defined('BASEPATH') or exit('No direct script access allowed');

class orderController extends CI_Controller
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

    public function index($id_penjual, $id_grup)
    {
        $data['id_grup'] = $id_grup;
        $data['listB'] = $this->produkModel->produkPenjual($id_penjual);
        $this->load->view('orderView', $data);
    }

    public function addOrder()
    {
        $id_grup = $this->input->post('id_grup');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah = $this->input->post('qty');
        $waktu = $this->input->post('waktu');

        $data = array(
            'nama_barang' => $nama_barang,
            'jumlah_barang' => $jumlah,
            'keterangan' => $waktu
        );

        $id = $this->session->userdata('id1');
        $this->produkModel->input_data($data, 'detail_pesanan');
        redirect("listorderController/index/$id/$id_grup");
    }
}

/* End of file Controllername.php */
