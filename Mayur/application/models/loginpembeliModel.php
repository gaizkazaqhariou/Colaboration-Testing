<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginpembeliModel extends CI_Model
{

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('pembeli');
        $this->db->where('nama_pembeli', $username);
        $this->db->where('pass_pembeli', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
