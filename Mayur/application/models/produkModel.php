<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produkModel extends CI_Model
{
    public function produkPenjual($id)
    {
        return $this->db->get_where('barang', array('pemilik_barang' => $id))->result_array();
    }

    public function hapus_data($where, $table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }

    public function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }
}