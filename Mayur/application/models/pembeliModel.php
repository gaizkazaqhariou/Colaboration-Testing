<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembeliModel extends CI_Model
{
    public function daftarPenjual()
    {
        return $this->db->get('penjual')->result_array();
    }

    public function detailPenjual($id_penjual)
    {
        return $this->db->get_where('penjual', array('id_penjual' => $id_penjual))->row_array();
    }

    public function grupTerjoin($id)
    {
        $this->db->select('detail_grup.id_detail, detail_grup.id_pembeli, detail_grup.id_grup, grup_jual.id_grup, grup_jual.nama_grup, grup_jual.kode_grup, grup_jual.pemilik_grup, penjual.deskripsi');
        $this->db->join('grup_jual', 'detail_grup.id_grup = grup_jual.id_grup');
        $this->db->join('penjual', 'grup_jual.pemilik_grup = penjual.id_penjual');
        return $this->db->get_where('detail_grup', array('detail_grup.id_pembeli' => $id))->result_array();
    }
}

/* End of file ModelName.php */
