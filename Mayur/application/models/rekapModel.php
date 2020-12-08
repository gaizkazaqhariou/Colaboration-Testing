<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rekapModel extends CI_Model
{
    public function detailPesanan($id)
    {
        $this->db->select('pesanan.id_detail_pesanan, pesanan.id_grup, pesanan.id_pembeli, pembeli.id_pembeli, pembeli.nama_pembeli, pembeli.alamat_pembeli, detail_pesanan.id_detail_pesanan, detail_pesanan.id_barang, detail_pesanan.jumlah_barang, detail_pesanan.keterangan, barang.id_barang, barang.nama_barang, barang.harga, barang.satuan, (barang.harga * detail_pesanan.jumlah_barang) as totalbarang');
        $this->db->join('pembeli', 'pesanan.id_pembeli = pembeli.id_pembeli');
        $this->db->join('detail_pesanan', 'pesanan.id_detail_pesanan = detail_pesanan.id_detail_pesanan');
        $this->db->join('barang', 'detail_pesanan.id_barang = barang.id_barang');
        return $this->db->get_where('pesanan', array('pesanan.id_pembeli' => $id))->result_array();
    }
}

/* End of file ModelName.php */
