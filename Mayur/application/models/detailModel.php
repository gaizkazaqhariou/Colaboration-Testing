<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detailModel extends CI_Model
{
    public function listPesanan($id_grup)
    {
        $this->db->select('*');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        $this->db->group_by("pesanan.id_pembeli");
        return $this->db->get_where('pesanan', array('id_grup' => $id_grup))->result_array();
    }
}

/* End of file ModelName.php */
