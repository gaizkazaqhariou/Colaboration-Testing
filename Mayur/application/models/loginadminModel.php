<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class loginadminModel extends CI_Model {

    public function login($username, $password)
    {
        	$this->db->select('*');
            $this->db->from('admin');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
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