<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembeliModel extends CI_Model
{
    public function daftarPenjual()
    {
        return $this->db->get('penjual')->result_array();
    }

    public function detailPenjual($id_penjual)
    {
        return $this->db->get_where('penjual', array('id_penjual' => $id_penjual))->row_array();
    }
}

/* End of file ModelName.php */
