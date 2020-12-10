<?php
defined('BASEPATH') or exit('No direct script access allowed');

class listorderModel extends CI_Model
{

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}