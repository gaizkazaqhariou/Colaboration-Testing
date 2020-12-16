<?php

defined('BASEPATH') or exit('No direct script access allowed');

class rekapController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('rekapModel');
        $this->load->model('pembeliModel');
        $this->load->database();
    }

    public function index($id)
    {
        $data['dataP'] = $this->rekapModel->dataPembeli($id);
        $data['hargaH'] = $this->rekapModel->hargaTotalHarian($id);
        $data['detailP'] = $this->rekapModel->detailPesanan($id);
        $this->load->view('rekapView', $data);
    }

    public function hapus($id, $id_grup, $id_pembeli){
        $where = array('id_pesanan' => $id);
        $this->rekapModel->hapus_data($where, 'pesanan');
        redirect("rekapController/index/$id_pembeli/$id_grup");
    }
}

/* End of file Controllername.php */
