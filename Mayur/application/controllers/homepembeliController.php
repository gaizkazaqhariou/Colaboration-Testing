<?php

defined('BASEPATH') or exit('No direct script access allowed');

class homepembeliController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user1') == '') {
            redirect('chooserController');
        }

        $this->load->model('pembeliModel');
        $this->load->database();
    }

    public function index($id)
    {
        $data['id_pembeli'] = $id;
        $data['daftarpenjual'] = $this->pembeliModel->penjualLimit();

        $this->load->view('homepembeliView', $data);
    }
}


/* End of file Controllername.php */
