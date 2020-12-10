<?php

defined('BASEPATH') or exit('No direct script access allowed');

class joinController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user1') == '') {
            redirect('chooserController');
        }

        $this->load->model('joinModel');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('joinView');
    }

    public function aksijoin()
    {
        $kode = htmlspecialchars($this->input->post('kode'));

        $cekKode = $this->joinModel->getKode($kode);

        if ($cekKode) {
            foreach ($cekKode as $row) {
                $id_grup = $row['id_grup'];
            }
            $id = $this->session->userdata('id1');
            $cekTerjoin = $this->joinModel->getTerjoin($id_grup, $id);

            if ($cekTerjoin == '') {
                $data = array(
                    'id_grup' => $id_grup,
                    'id_pembeli' => $id
                );
                $this->joinModel->input_data($data, 'detail_grup');
                redirect("gruppembeliController/index/$id");
            } else {
                $data['pesan'] = "anda sudah terdaftar di grup";
                $this->load->view('joinView', $data);
            }
        } else {
            $data['pesan'] = "kode yang anda masukkan salah";
            $this->load->view('joinView', $data);
        }
    }
}

/* End of file Controllername.php */
