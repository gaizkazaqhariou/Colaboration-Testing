<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminModel extends CI_Model
{
    public function pembeli()
    {
        return $this->db->get('pembeli')->result_array();
    }

    public function totalpembeli()
    {
        return count($this->db->get('pembeli')->result_array());
    }

    public function penjual()
    {
        return $this->db->get('penjual')->result_array();
    }

    public function totalpenjual()
    {
        return count($this->db->get('penjual')->result_array());
    }

    public function editpembeli($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function editpembeli2($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function editpenjual2($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function editpenjual($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function hapuspembeli($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapuspenjual($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

/* End of file adminModel.php */
