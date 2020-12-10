<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin') == '') {
        //     redirect('chooserController');
        // }

        $this->load->model('adminModel');
        $this->load->database();
    }

    public function index()
    {
        $data['totalPb'] = $this->adminModel->totalPembeli();
        $data['totalPj'] = $this->adminModel->totalPenjual();
        $this->load->view('homeAdmin', $data);
    }

    public function penjual()
    {
        $data['penjual'] = $this->adminModel->penjual();
        $this->load->view('listPenjual', $data);
    }

    public function pembeli()
    {
        $data['pembeli'] = $this->adminModel->pembeli();
        $this->load->view('listPembeli', $data);
    }

    public function editpenjual()
    {
    }

    public function editpembeli()
    {
    }

    public function hapuspenjual()
    {
    }

    public function hapuspembeli()
    {
    }
}

/* End of file adminController.php */
