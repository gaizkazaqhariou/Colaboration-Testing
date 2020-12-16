<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class addgrupController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('addgrupModel');
		$this->load->database();
    }
    
    public function index()
    {
        $this->load->view('addgrupView');
    }

    public function tambahGrup(){
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3048;
        $this->load->library('upload', $config);

        if (!empty($_FILES['foto_grup'])) {
            $this->upload->do_upload('foto_grup');
            $foto_grup = $this->upload->data("file_name");
        }

    	$nama_grup = $this->input->post('nama_grup');
        $kode_grup = $this->input->post('kode_grup');
        $pemilik_grup = $this->session->userdata('id');

        $data = array(
            'nama_grup' => $nama_grup,
            'kode_grup' => $kode_grup,
            'pemilik_grup' => $pemilik_grup,
            'foto_grup' => $foto_grup
        );

        $this->addgrupModel->input_data($data,'grup_jual');
        redirect("grupController/index/$pemilik_grup");
    }

}

/* End of file Controllername.php */
?>