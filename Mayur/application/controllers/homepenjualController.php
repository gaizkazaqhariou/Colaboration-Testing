<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class homepenjualController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {                
                redirect('welcomeController');                
        }
    }
    
    public function index()
    {
        $this->load->view('homepenjualView');
    }

}

/* End of file Controllername.php */
?>