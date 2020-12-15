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
        $this->load->model('pembeliModel');
        $this->load->database();
    }

    public function index($id_penjual, $id_grup)
    {
        $data['id_grup'] = $id_grup;
        $data['listB'] = $this->produkModel->produkPenjual($id_penjual);
        $data['grupJ'] = $this->pembeliModel->grupTerjoin($id_grup);
        $this->load->view('orderView', $data);
    }

    public function addOrder()
    {
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

        $this->produkModel->input_data($data, 'pesanan');
        redirect("listorderController/index/$id_pembeli/$id_grup");
    }
}

/* End of file Controllername.php */
