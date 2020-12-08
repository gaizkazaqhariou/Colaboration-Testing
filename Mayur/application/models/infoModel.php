<?php
defined('BASEPATH') or exit('No direct script access allowed');

class infoModel extends CI_Model
{
    public function getTotalGrup($id_grup)
    {
        return count($this->db->get_where('detail_grup', array('id_grup' => $id_grup))->result_array());
    }

    public function getTotalPesanan($id_grup)
    {
        $this->db->group_by("id_pembeli");
        return count($this->db->get_where('pesanan', array('id_grup' => $id_grup))->result_array());
    }
}

/* End of file ModelName.php */
