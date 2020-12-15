<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rekapModel extends CI_Model
{
    public function dataPembeli($id_pembeli)
    {
        return $this->db->get_where('pembeli', array('id_pembeli' => $id_pembeli))->row_array();
    }

    public function detailPesanan($id)
    {
        $this->db->select('pesanan.id_pesanan, pesanan.id_grup, pesanan.id_pembeli, pembeli.id_pembeli, pembeli.nama_pembeli, pembeli.alamat_pembeli, pesanan.id_barang, pesanan.jumlah_barang, pesanan.tanggal_pesan, barang.id_barang, barang.nama_barang, barang.harga, barang.satuan, (barang.harga * pesanan.jumlah_barang) as totalbarang');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        // $this->db->join('detail_pesanan', 'pesanan.id_detail_pesanan = detail_pesanan.id_detail_pesanan');
        $this->db->join('barang', 'pesanan.id_barang = barang.id_barang');
        $this->db->order_by('tanggal_pesan', 'asc');
        return $this->db->get_where('pesanan', array('pesanan.id_pembeli' => $id))->result_array();
    }

    public function hargaTotalHarian($id)
    {
        $date = date('Y-m-d');
        $this->db->select('pesanan.id_pesanan, pesanan.id_grup, pesanan.id_pembeli, pembeli.id_pembeli, pembeli.nama_pembeli, pembeli.alamat_pembeli, pesanan.id_barang, pesanan.jumlah_barang, pesanan.tanggal_pesan, barang.id_barang, barang.nama_barang, barang.harga, barang.satuan, (barang.harga * pesanan.jumlah_barang) as totalbarang');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        // $this->db->join('detail_pesanan', 'pesanan.id_detail_pesanan = detail_pesanan.id_detail_pesanan');
        $this->db->join('barang', 'pesanan.id_barang = barang.id_barang');
        $this->db->order_by('tanggal_pesan', 'asc');
        return $this->db->get_where('pesanan', array('pesanan.id_pembeli' => $id, 'pesanan.tanggal_pesan' => $date))->result_array();
    }

    public function hargaTotal($id, $id_grup)
    {
        $date = date('Y-m-d');
        $this->db->select('pesanan.id_pesanan, pesanan.id_grup, pesanan.id_pembeli, pembeli.id_pembeli, pembeli.nama_pembeli, pembeli.alamat_pembeli, pesanan.id_barang, pesanan.jumlah_barang, pesanan.tanggal_pesan, barang.id_barang, barang.nama_barang, barang.harga, barang.satuan, (barang.harga * pesanan.jumlah_barang) as totalbarang');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        // $this->db->join('detail_pesanan', 'pesanan.id_detail_pesanan = detail_pesanan.id_detail_pesanan');
        $this->db->join('barang', 'pesanan.id_barang = barang.id_barang');
        $this->db->order_by('tanggal_pesan', 'asc');
        return $this->db->get_where('pesanan', array('pesanan.id_pembeli' => $id, 'pesanan.id_grup' => $id_grup, 'pesanan.tanggal_pesan' => $date))->result_array();
    }

    public function detailPesananGrup($id, $id_grup)
    {
        $this->db->select('pesanan.id_pesanan, pesanan.id_grup, pesanan.id_pembeli, pembeli.id_pembeli, pembeli.nama_pembeli, pembeli.alamat_pembeli, pesanan.id_barang, pesanan.jumlah_barang, pesanan.tanggal_pesan, barang.id_barang, barang.nama_barang, barang.harga, barang.satuan, (barang.harga * pesanan.jumlah_barang) as totalbarang');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        // $this->db->join('detail_pesanan', 'pesanan.id_detail_pesanan = detail_pesanan.id_detail_pesanan');
        $this->db->join('barang', 'pesanan.id_barang = barang.id_barang');
        $this->db->order_by('tanggal_pesan', 'asc');
        return $this->db->get_where('pesanan', array('pesanan.id_pembeli' => $id, 'pesanan.id_grup' => $id_grup))->result_array();
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

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

/* End of file ModelName.php */
