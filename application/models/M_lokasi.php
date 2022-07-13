<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {


	//simpan data ke tabel
	public function input($data)
	{
		$this->db->insert('tbl_lokasi', $data);
        
	}

	//mengambil semua data dari tabel
	public function allData()
	{
		$this->db->select('*');
		$this->db->from('tbl_lokasi');
		return $this->db->get()->result();
	}
}



