<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class infogrupController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('infogrupView');
    }

}

/* End of file Controllername.php */
?>