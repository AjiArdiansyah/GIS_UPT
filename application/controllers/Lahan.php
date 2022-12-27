<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lahan');
    }
    
	//pemetaan Coordinat
	public function index()
	{
		$data = array(
            'judul' => 'Pemetaan Lahan',
            'page' => 'lahan/v_pemetaan_lahan',
			'lahan' => $this->m_lahan->allData(),
        );
		$this->load->view('v_template', $data, false);
	}

    public function input()
	{
        //validasi form input 
		$this->form_validation->set_rules('nama_lahan', 'Nama Lahan', 'required', array(
            'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('pemilik', 'Pemilik', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

		$this->form_validation->set_rules('luas', 'Luas', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

        $this->form_validation->set_rules('geojson', 'Gambar Lahan', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

		$this->form_validation->set_rules('luas', 'Warna Lahan', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Input Lahan',
                'page' => 'lahan/v_input_lahan',
            );
            $this->load->view('v_template', $data, false);
        } else {
            # konfigurasi file upload
            $config['upload_path'] ='./sertifikat/';
			$config['allowed_types'] = 'pdf';
			$config['max_size']	= 2048;
			$this->upload->initialize($config);
            if (!$this->upload->do_upload('sertifikat')) {
                $data = array(
                    //jika gagal upload file
                    'judul' => 'Input Lahan',
                    'page' => 'lahan/v_input_lahan',
                    'error_upload' => $this->upload->display_errors(),
                );
                $this->load->view('v_template', $data, false);
        }else {
            # jika upload file berhasil
            $upload_data = array('upload_data' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image'] = './sertifikat/'. $upload_data['upload_data']['file_name'];
			$this->load->library('image_lib', $config);
            $data = array(
				'nama_lahan' => $this->input->post('nama_lahan'),
				'pemilik' => $this->input->post('pemilik'),
				'luas' => $this->input->post('luas'),
                'geojson' => $this->input->post('geojson'),
                'warna' => $this->input->post('warna'),
				'sertifikat' => $upload_data['upload_data']['file_name'],
			);
			$this->m_lahan->input($data);
			//pesan data berhasil di input
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
			redirect('lahan/input');
        }
        
        }
	}

	public function edit($id_lahan)

	{
        //validasi form input 
		$this->form_validation->set_rules('nama_lahan', 'Nama Lahan', 'required', array(
            'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('pemilik', 'Pemilik', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

		$this->form_validation->set_rules('luas', 'Luas', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

        $this->form_validation->set_rules('geojson', 'Gambar Lahan', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

		$this->form_validation->set_rules('luas', 'Warna Lahan', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Edit Lahan',
                'page' => 'lahan/v_Edit_lahan',
				'lahan' => $this->m_lahan->detail($id_lahan),
            );
            $this->load->view('v_template', $data, false);
	}else{
		# konfigurasi file upload
		$config['upload_path'] ='./sertifikat/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= 2048;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('sertifikat')) {
		//jika tanpa upload
		$data = array(
			'id_lahan' => $id_lahan,
			'nama_lahan' => $this->input->post('nama_lahan'),
			'pemilik' => $this->input->post('pemilik'),
			'luas' => $this->input->post('luas'),
			'geojson' => $this->input->post('geojson'),
			'warna' => $this->input->post('warna'),
		);
		$this->m_lahan->edit($data);
			//pesan data berhasil di input
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Diupdate !!');
			redirect('lahan/index');
	}else{
		# jika upload file berhasil
		$upload_data = array('upload_data' => $this->upload->data());
		$config['image_library'] = 'gd2';
		$config['source_image'] = './sertifikat/'. $upload_data['upload_data']['file_name'];
		$this->load->library('image_lib', $config);
		$data = array(
			'id_lahan' => $id_lahan,
			'nama_lahan' => $this->input->post('nama_lahan'),
			'pemilik' => $this->input->post('pemilik'),
			'luas' => $this->input->post('luas'),
			'geojson' => $this->input->post('geojson'),
			'warna' => $this->input->post('warna'),
		);
		$this->m_lahan->edit($data);
		//pesan data berhasil di input
		$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Diupdate !!');
		redirect('lahan/index');
	}
}
}
		public function delete($id_lahan)
		{
		$data = array('id_lahan' => $id_lahan);
		$this->m_lahan->delete($data);
		$this->session->set_flashdata('pesan', 'Data Lahan Berhasil DiHapus !!');
			redirect('lahan/index');
		}


    
}

