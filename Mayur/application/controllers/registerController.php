<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class registerController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('registerModel');
		$this->load->database();
		$this->load->helper('form');
    }
    
    public function index()
    {
        $this->load->view('registerView');
    }

    public function tambahPenjual(){
    	$this->form_validation->set_rules('nama_penjual', 'nama_penjual', 'required');
    	$this->form_validation->set_rules('no_hp_penjual', 'no_hp_penjual', 'required');
    	$this->form_validation->set_rules('alamat_penjual', 'alamat_penjual', 'required');
		$this->form_validation->set_rules('pass_penjual', 'pass_penjual', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registerView');
		} else {
			$this->registerModel->tambahPenjual();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('loginController/index');
		}
    }
}

/* End of file Controllername.php */
?>