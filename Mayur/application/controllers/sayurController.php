<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sayurController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('sayurView');
    }

}

/* End of file Controllername.php */
?>