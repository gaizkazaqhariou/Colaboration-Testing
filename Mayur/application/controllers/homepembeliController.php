<?php

defined('BASEPATH') or exit('No direct script access allowed');

class homepembeliController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('homepembeliView');
    }
}

/* End of file Controllername.php */
