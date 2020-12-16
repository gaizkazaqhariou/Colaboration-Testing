<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class registerpembeliController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('registerpembeliModel');
		$this->load->database();
    }
    
    public function index()
    {
        $this->load->view('registerpembeliView');
    }

    public function tambahPembeli(){
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3048;
        $this->load->library('upload', $config);

        if (!empty($_FILES['foto_pembeli'])) {
            $this->upload->do_upload('foto_pembeli');
            $foto_pembeli = $this->upload->data("file_name");
        }

    	$nama_pembeli = $this->input->post('nama_pembeli');
        $no_hp_pembeli = $this->input->post('no_hp_pembeli');
        $alamat_pembeli = $this->input->post('alamat_pembeli');
        $pass_pembeli = $this->input->post('pass_pembeli');

        $data = array(
            'nama_pembeli' => $nama_pembeli,
            'no_hp_pembeli' => $no_hp_pembeli,
            'alamat_pembeli' => $alamat_pembeli,
            'pass_pembeli' => $pass_pembeli,
            'foto_pembeli' => $foto_pembeli
        );

        $this->registerpembeliModel->input_data($data,'pembeli');
        redirect('loginpembeliController');
    }
}

/* End of file Controllername.php */
?>