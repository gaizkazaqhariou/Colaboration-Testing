<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualModel extends CI_Model
{
    public function dataPenjual($id_penjual)
    {
        return $this->db->get_where('penjual', array('id_penjual' => $id_penjual))->row_array();
    }

    public function getTotalGrup($id_penjual)
    {
        return count($this->db->get_where('grup_jual', array('pemilik_grup' => $id_penjual))->result_array());
    }

    public function dataProduk($id_penjual)
    {
        return $this->db->get_where('penjual', array('id_penjual' => $id_penjual))->row_array();
    }

    public function getTotalProduk($id_penjual)
    {
        return count($this->db->get_where('barang', array('pemilik_barang' => $id_penjual))->result_array());
    }

    public function produkwhere($id_barang){
        return $this->db->get_where('barang', array('id_barang' => $id_barang))->row_array();
    }

    public function keterangan($id_pesanan){
        return $this->db->get_where('pesanan', array('id_pesanan' => $id_pesanan))->row_array();
    }
}
