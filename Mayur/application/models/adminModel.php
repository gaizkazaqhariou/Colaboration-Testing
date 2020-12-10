<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminModel extends CI_Model
{
    public function pembeli()
    {
        return $this->db->get('pembeli')->result_array();
    }

    public function totalpembeli()
    {
        return count($this->db->get('pembeli')->result_array());
    }

    public function penjual()
    {
        return $this->db->get('penjual')->result_array();
    }

    public function totalpenjual()
    {
        return count($this->db->get('penjual')->result_array());
    }

    public function editpembeli()
    {
        # code...
    }

    public function editpenjual()
    {
        # code...
    }

    public function hapuspembeli()
    {
        # code...
    }

    public function hapuspenjual()
    {
        # code...
    }
}

/* End of file adminModel.php */
