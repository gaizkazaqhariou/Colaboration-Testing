<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produkController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('produkModel');
        $this->load->database();    
    }
    
    public function index($id)
    {
    	$data['produkP'] = $this->produkModel->produkPenjual($id);
        $data['id'] = $this->session->userdata('id');
        $this->load->view('produkView', $data);
    }

}

/* End of file Controllername.php */
?>