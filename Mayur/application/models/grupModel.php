<?php
defined('BASEPATH') or exit('No direct script access allowed');

class grupModel extends CI_Model
{
    public function grupPenjual($id)
    {
        return $this->db->get_where('grup_jual', array('pemilik_grup' => $id))->result_array();
    }

    public function anggotaGrup($id_grup)
    {
        $this->db->select('*');
        $this->db->join('pembeli', 'detail_grup.id_pembeli = pembeli.id_pembeli');
        return $this->db->get_where('detail_grup', array('id_grup' => $id_grup))->result_array();
    }
}

/* End of file ModelName.php */
