<?php
defined('BASEPATH') or exit('No direct script access allowed');

class grupModel extends CI_Model
{
    public function grupPenjual($id)
    {
        return $this->db->get_where('grup_jual', array('pemilik_grup' => $id))->result_array();
    }
}

/* End of file ModelName.php */
