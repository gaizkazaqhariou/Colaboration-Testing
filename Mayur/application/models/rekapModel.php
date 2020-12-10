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
        $this->db->select('pesanan.id_pesanan, pesanan.id_grup, pesanan.id_pembeli, pembeli.id_pembeli, pembeli.nama_pembeli, pembeli.alamat_pembeli, pesanan.id_barang, pesanan.jumlah_barang, pesanan.keterangan, barang.id_barang, barang.nama_barang, barang.harga, barang.satuan, (barang.harga * pesanan.jumlah_barang) as totalbarang');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        // $this->db->join('detail_pesanan', 'pesanan.id_detail_pesanan = detail_pesanan.id_detail_pesanan');
        $this->db->join('barang', 'pesanan.id_barang = barang.id_barang');
        return $this->db->get_where('pesanan', array('pesanan.id_pembeli' => $id))->result_array();
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
