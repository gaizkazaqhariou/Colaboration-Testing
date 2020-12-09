<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

    public function login($username, $password)
    {
        	$this->db->select('*');
            $this->db->from('penjual');
            $this->db->where('nama_penjual',$username);
            $this->db->where('pass_penjual',$password);
            $this->db->limit(1);
            $query=$this->db->get();
            if($query->num_rows()==1){
                return $query->result();
            } else {
                return false;
            }
    }

}

?>