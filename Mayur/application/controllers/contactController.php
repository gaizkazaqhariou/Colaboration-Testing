<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contactController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('contactView');
    }

}

/* End of file Controllername.php */
?>