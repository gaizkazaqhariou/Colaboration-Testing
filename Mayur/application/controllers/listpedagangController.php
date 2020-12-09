<?php

defined('BASEPATH') or exit('No direct script access allowed');

class listpedagangController extends CI_Controller
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

    public function index()
    {
        $data['daftarpenjual'] = $this->pembeliModel->daftarPenjual();
        $this->load->view('listpedagangView', $data);
    }
}

/* End of file Controllername.php */
