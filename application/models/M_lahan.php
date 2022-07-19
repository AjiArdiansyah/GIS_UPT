<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lahan extends CI_Model {


	//simpan data ke tabel
	public function input($data)
	{
		$this->db->insert('tbl_lahan', $data);
	}
}