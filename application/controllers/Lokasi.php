<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	
	public function __construct()
	  {
		parent::__construct();
		$this->load->model('m_lokasi');
		
	  }

	//pemetaan coordinat
	public function index()
	{
		$data = array(
            'judul' => 'Pemetaan Coordinat',
            'page' => 'lokasi/v_pemetaan_lokasi',
			'lokasi' => $this->m_lokasi->allData(),
        );
		$this->load->view('v_template', $data, false);
		$this->user_login->cek_login();
	}

	//input data
    public function input()
	{
		
		$this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required', array(
			'required' => '% Wajib Diisi !'
		));
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
			'required' => '% Wajib Diisi !'
		));

		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
			'required' => '% Wajib Diisi !'
		));

		if ($this->form_validation->run() == FALSE) {
			
			$data = array(
				'judul' => 'Input Lokasi',
				'page' => 'lokasi/v_input_lokasi',
			);
			$this->load->view('v_template', $data, false);
			$this->user_login->cek_login();
		}else {
			$config['upload_path'] ='./gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= 2048;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'judul' => 'Input Lokasi',
					'page' => 'lokasi/v_input_lokasi',
					'error_upload' => $this->upload->display_errors(),
				);
				$this->load->view('v_template', $data, false);
				$this->user_login->cek_login();
		}else {
			$upload_data = array('upload_data' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image'] = './gambar/'. $upload_data['upload_data']['file_name'];
			$this->load->library('image_lib', $config);
			# simpan data ke database
			$data = array(
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'gambar' => $upload_data['upload_data']['file_name'],
			);
			$this->m_lokasi->input($data);
			//pesan data berhasil di input
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
			redirect('lokasi/input');
		}	
	}
}
	//edit data
	public function edit($id_lokasi)
	{
		$this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required', array(
			'required' => '% Wajib Diisi !'
		));
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
			'required' => '% Wajib Diisi !'
		));

		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
			'required' => '% Wajib Diisi !'
		));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'judul' => 'Edit Lokasi',
				'page' => 'lokasi/v_edit_lokasi',
				'lokasi' => $this->m_lokasi->detail($id_lokasi),
			);
			$this->load->view('v_template', $data, false);
			$this->user_login->cek_login();
		}else {
			$config['upload_path'] ='./gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= 2048;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'id_lokasi' => $id_lokasi, 
					'nama_lokasi' => $this->input->post('nama_lokasi'),
					'latitude' => $this->input->post('latitude'),
					'longitude' => $this->input->post('longitude'),
				);
			# simpan data ke database
			$data = array(
				'id_lokasi' => $id_lokasi, 
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'gambar' => $upload_data['upload_data']['file_name'], 
			);
			$this->m_lokasi->edit($data);
			//pesan data berhasil di input
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
			redirect('lokasi/index');
			}else {
			$upload_data = array('upload_data' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image'] = './gambar/'. $upload_data['upload_data']['file_name'];
			$this->load->library('image_lib', $config);
			# simpan data ke database
			$data = array(
				'id_lokasi' => $id_lokasi, 
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'gambar' => $upload_data['upload_data']['file_name'], 
			);
			$this->m_lokasi->edit($data);
			//pesan data berhasil di input
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
			redirect('lokasi/index');
			}
		}
	}
	public function detail($id_lokasi)
	{
		$data = array(
            'judul' => 'Detail Posisi Coordinat',
            'page' => 'lokasi/v_detail_lokasi',
			'lokasi' => $this->m_lokasi->detail($id_lokasi),
        );
		$this->load->view('v_template', $data, false);
		$this->user_login->cek_login();
	}

	public function delete($id_lokasi)
	{
		$data = array('id_lokasi' => $id_lokasi);
		$this->m_lokasi->delete($data);
		$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Hapus !!');
			redirect('lokasi/index');
	}

	//pemetaan coordinat
	public function listlokasi()
	{
		$data = array(
            'judul' => 'List Lokasi',
            'page' => 'lokasi/v_list_lokasi',
			'lokasi' => $this->m_lokasi->allData(),
        );
		$this->load->view('v_template', $data, false);
		$this->user_login->cek_login();
	}
}
