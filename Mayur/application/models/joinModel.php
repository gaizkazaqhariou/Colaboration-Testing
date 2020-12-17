<?php
defined('BASEPATH') or exit('No direct script access allowed');

class joinModel extends CI_Model
{
    public function getKode($kode)
    {
        // $this->db->select('id_grup');
        // return $this->db->query('select id_grup from grup_jual where kode_grup = "' . $kode . '"')->row_array();
        $this->db->select('id_grup');
        $this->db->from('grup_jual');
        $this->db->where('kode_grup', $kode);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
        // return $this->db->get_where('grup_jual', array('kode_grup' => $kode))->row_array();
    }

    public function getTerjoin($id_grup, $id_pembeli)
    {
        return $this->db->get_where('detail_grup', array('id_grup' => $id_grup, 'id_pembeli' => $id_pembeli))->row_array();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}

/* End of file ModelName.php */
