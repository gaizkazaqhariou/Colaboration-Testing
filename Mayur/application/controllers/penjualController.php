<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class penjualController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('penjualView');
    }

}

/* End of file Controllername.php */
?>