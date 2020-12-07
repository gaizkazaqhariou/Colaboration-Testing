<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class rekapController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('rekapView');
    }

}

/* End of file Controllername.php */
?>