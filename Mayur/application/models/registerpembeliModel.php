<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class registerpembeliModel extends CI_Model {
    
        public function input_data($data, $table)
	    {
			$this->db->insert($table, $data);
        }
    
    }
?>