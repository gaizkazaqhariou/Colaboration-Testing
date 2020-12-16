<?php

defined('BASEPATH') or exit('No direct script access allowed');

class listorderController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user1') == '') {
            redirect('chooserController');
        }

        $this->load->model('rekapModel');
        $this->load->model('produkModel');
        $this->load->model('pembeliModel');
        $this->load->model('penjualModel');
        $this->load->database();
    }

    public function index($id, $id_grup)
    {
        $data['listP'] = $this->rekapModel->detailPesananGrup($id, $id_grup);
        $data['hargaH'] = $this->rekapModel->hargaTotal($id, $id_grup);
        $data['grupJ'] = $this->pembeliModel->grupTerjoin($id_grup);
        $this->load->view('listorderView', $data);
    }

    public function hapus($id, $id_grup)
    {
        $where = array('id_pesanan' => $id);
        $this->rekapModel->hapus_data($where, 'pesanan');
        $id_pembeli = $this->session->userdata('id1');
        redirect("listorderController/index/$id_pembeli/$id_grup");
    }

    public function edit($id_pesanan, $id_grup, $id_barang, $id_pembeli)
    {
        $where = array('id_pesanan' => $id_pesanan);
        $data['pesanan'] = $this->rekapModel->edit_data($where, 'pesanan')->result();
        $data['produkP'] = $this->produkModel->produkAll();
        $data['produkW'] = $this->penjualModel->produkwhere($id_barang);
        $data['ket'] = $this->penjualModel->keterangan($id_pesanan);
        $this->load->view('editorderView', $data);
    }
}

/* End of file Controllername.php */
