<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class registerModel extends CI_Model {
    
        public function tambahPenjual()
	    {
			$data = array(
				'nama_penjual' => $this->input->post('nama_penjual', true), 
				'no_hp_penjual' => $this->input->post('no_hp_penjual', true), 
				'alamat_penjual' => $this->input->post('alamat_penjual', true), 
				'pass_penjual' => $this->input->post('pass_penjual', true), 
			);
			$this->db->insert('penjual', $data);
        }
    
    }
?>
  