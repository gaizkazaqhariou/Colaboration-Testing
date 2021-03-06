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

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}

/* End of file ModelName.php */
