<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class editprodukModel extends CI_Model {

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}

?>