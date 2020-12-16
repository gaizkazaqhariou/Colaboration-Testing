<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user3') == '') {
            redirect('loginadminController');
        }

        $this->load->model('adminModel');
        $this->load->database();
    }

    public function index($id)
    {
        $data['totalPb'] = $this->adminModel->totalPembeli();
        $data['totalPj'] = $this->adminModel->totalPenjual();
        $this->load->view('homeAdmin', $data);
    }

    public function penjual()
    {
        $data['penjual'] = $this->adminModel->penjual();
        $this->load->view('listPenjual', $data);
    }

    public function pembeli()
    {
        $data['pembeli'] = $this->adminModel->pembeli();
        $this->load->view('listPembeli', $data);
    }

    public function editpenjual($id_penjual)
    {
        $where = array('id_penjual' => $id_penjual);
        $data['penjual'] = $this->adminModel->editpenjual($where, 'penjual')->result();
        $this->load->view('editpenjualView', $data);
    }

    public function editpembeli($id_pembeli)
    {
        $where = array('id_pembeli' => $id_pembeli);
        $data['pembeli'] = $this->adminModel->editpembeli($where, 'pembeli')->result();
        $this->load->view('editpembeliView', $data);
    }

    public function hapuspenjual($id_penjual)
    {
        $where = array('id_penjual' => $id_penjual);
        $this->adminModel->hapuspenjual($where, 'penjual');
        redirect("adminController/penjual");
    }

    public function hapuspembeli($id_pembeli, $foto_pembeli)
    {
        $where = array('id_pembeli' => $id_pembeli);
        $this->adminModel->hapuspembeli($where, 'pembeli');
        $path='.assets/upload/'.$foto_pembeli;
        unlink($path);
        redirect("adminController/pembeli");
    }

    public function update_penjual(){
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3048;
        $this->load->library('upload', $config);

        if (!empty($_FILES['foto_penjual'])) {
            $this->upload->do_upload('foto_penjual');
            $foto_penjual = $this->upload->data("file_name");
        }

        $id_penjual = $this->input->post('id_penjual');
        $nama_pembeli = $this->input->post('nama_penjual');
        $no_hp_pembeli = $this->input->post('no_hp_penjual');
        $alamat_pembeli = $this->input->post('alamat_penjual');
        $pass_pembeli = $this->input->post('pass_penjual');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'id_penjual' => $id_penjual,
            'nama_penjual' => $nama_pembeli,
            'no_hp_penjual' => $no_hp_pembeli,
            'alamat_penjual' => $alamat_pembeli,
            'pass_penjual' => $pass_pembeli,
            'foto_penjual' => $foto_penjual,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi
        );

        $where = array(
            'id_penjual'=>$id_penjual
        );


        $this->adminModel->editpenjual2($where, $data,'penjual');
        redirect('adminController/penjual');
    }

    public function update_pembeli(){

        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3048;
        $this->load->library('upload', $config);

        if (!empty($_FILES['foto_pembeli'])) {
            $this->upload->do_upload('foto_pembeli');
            $foto_pembeli = $this->upload->data("file_name");
        }

        $id_pembeli = $this->input->post('id_pembeli');
        $nama_pembeli = $this->input->post('nama_pembeli');
        $no_hp_pembeli = $this->input->post('no_hp_pembeli');
        $alamat_pembeli = $this->input->post('alamat_pembeli');
        $pass_pembeli = $this->input->post('pass_pembeli');

        $data = array(
            'id_pembeli' => $id_pembeli,
            'nama_pembeli' => $nama_pembeli,
            'no_hp_pembeli' => $no_hp_pembeli,
            'alamat_pembeli' => $alamat_pembeli,
            'pass_pembeli' => $pass_pembeli,
            'foto_pembeli' => $foto_pembeli
        );

        $where = array(
            'id_pembeli'=>$id_pembeli
        );

        $this->adminModel->editpembeli2($where, $data,'pembeli');
        redirect('adminController/pembeli');
    }
}

/* End of file adminController.php */
