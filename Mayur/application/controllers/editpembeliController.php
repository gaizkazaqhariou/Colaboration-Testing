<?php

defined('BASEPATH') or exit('No direct script access allowed');

class editpembeliController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('editpembeliModel');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('editpembeliView');
    }

}

/* End of file Controllername.php */
