<?php

defined('BASEPATH') or exit('No direct script access allowed');

class grupController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('grupModel');
        $this->load->database();
    }

    public function index($id)
    {
        $data['grupP'] = $this->grupModel->grupPenjual($id);
        $data['id'] = $this->session->flashdata('id');

        $this->load->view('grupView', $data);
    }
}

/* End of file Controllername.php */
