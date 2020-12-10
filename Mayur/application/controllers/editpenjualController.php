<?php

defined('BASEPATH') or exit('No direct script access allowed');

class editpenjualController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('editpenjualModel');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('editpenjualView');
    }

}

/* End of file Controllername.php */
