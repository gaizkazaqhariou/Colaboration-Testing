<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produkModel extends CI_Model
{
    public function produkPenjual($id)
    {
        $this->db->select('*');
        $this->db->join('penjual', 'barang.pemilik_barang = penjual.id_penjual');
        return $this->db->get_where('barang', array('pemilik_barang' => $id))->result_array();
    }

    public function produkAll()
    {
        $this->db->select('*');
        $this->db->join('penjual', 'barang.pemilik_barang = penjual.id_penjual');
        return $this->db->get('barang')->result_array();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
