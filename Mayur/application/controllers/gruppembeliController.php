<?php

defined('BASEPATH') or exit('No direct script access allowed');

class gruppembeliController extends CI_Controller
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
        $data['grupJ'] = $this->pembeliModel->grupTerjoin($id);
        $this->load->view('gruppembeliView', $data);
    }
}

/* End of file Controllername.php */
