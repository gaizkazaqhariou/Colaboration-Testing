<?php
defined('BASEPATH') or exit('No direct script access allowed');

class addgrupModel extends CI_Model
{
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
    }
}

/* End of file ModelName.php */
