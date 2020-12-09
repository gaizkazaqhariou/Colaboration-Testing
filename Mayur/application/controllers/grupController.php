<?php

defined('BASEPATH') or exit('No direct script access allowed');

class grupController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '') {
            redirect('chooserController');
        }

        $this->load->model('grupModel');
        $this->load->database();
    }

    public function index($id)
    {
        $data['grupP'] = $this->grupModel->grupPenjual($id);
        $data['id'] = $this->session->userdata('id');

        $this->load->view('grupView', $data);
    }

    public function hapus($id){
        $where = array('id_grup'=>$id);
        $this->grupModel->hapus_data($where, 'grup_jual');
        $id_penjual = $this->session->userdata('id');
        redirect("grupController/index/$id_penjual");
    }

    public function edit($id_grup){
        $where = array('id_grup'=>$id_grup);
        $data['grup'] = $this->grupModel->edit_data($where, 'grup_jual')->result();
        $this->load->view('editgrupView', $data);
    }
}

/* End of file Controllername.php */
