<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class joinController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('joinView');
    }

}

/* End of file Controllername.php */
?>