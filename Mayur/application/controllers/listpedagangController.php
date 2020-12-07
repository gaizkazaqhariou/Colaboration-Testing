<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class listpedagangController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('listpedagangView');
    }

}

/* End of file Controllername.php */
?>