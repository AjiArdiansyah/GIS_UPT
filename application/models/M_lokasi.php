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

	//mengambil data berdasarkan id lokasi
	public function detail($id_lokasi)
	{
		$this->db->select('*');
		$this->db->from('tbl_lokasi');
		$this->db->where('id_lokasi', $id_lokasi);
		return $this->db->get()->row();
	}

	public function edit($edit)
	{
		$this->db->where('id_lokasi', $edit['id_lokasi']);
		$this->db->update('tbl_lokasi', $edit);
		
		
	}

	public function delete($edit)
	{
		$this->db->where('id_lokasi', $edit['id_lokasi']);
		$this->db->update('tbl_lokasi', $edit);
		
		
	}
}




