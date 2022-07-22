<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lahan extends CI_Model {


	//simpan data ke tabel
	public function input($data)
	{
		$this->db->insert('tbl_lahan', $data);
	}

    //mengambil semua data dari tabel
	public function allData()
	{
		$this->db->select('*');
		$this->db->from('tbl_lahan');
		return $this->db->get()->result();
	}

	//mengambil data berdasarkan id lahan
	public function detail($id_lahan)
	{
		$this->db->select('*');
		$this->db->from('tbl_lahan');
		$this->db->where('id_lahan', $id_lahan);
		return $this->db->get()->row();
	}

	public function edit($edit)
	{
		$this->db->where('id_lahan', $edit['id_lahan']);
		$this->db->update('tbl_lahan', $edit);
		
		
	}

	public function delete($edit)
	{
		$this->db->where('id_lahan', $edit['id_lahan']);
		$this->db->update('tbl_lahan', $edit);
	}
}