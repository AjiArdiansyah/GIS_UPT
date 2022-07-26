<?php
 
 
 class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }
    
 
    public function index()
    {
        $data = array(
            'judul' => 'Data User ',
            'user' => $this->m_user->tampil(),
            'page' => 'v_datauser'
        );
        $this->load->view('v_template', $data, false);
        
    }
    
    public function input()
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required',array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('username', 'Username', 'required',array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required',array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE)
         {
            $data = array(
                'judul' => 'Input Data User',
                'page' => 'v_input_datauser'
            );
            //catat
            $this->load->view('v_template', $data, FALSE);
        } else {
            $data =array(
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            $this->m_user->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('user/input');
        }
        
    }

    public function edit($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required',array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('username', 'Username', 'required',array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required',array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE)
         {
            $data = array(
                'judul' => 'Edit Data User',
                'user' => $this->m_user->detail($id_user),
                'page' => 'v_edit_datauser'
            );
            //catat
            $this->load->view('v_template', $data, FALSE);
        } else {
            $data =array(
                'id_user' => $id_user,
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            $this->m_user->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('user');
        }
        
    }

    public function hapus($id_user)
    {
        $data = array('id_user'=>$id_user);
        $this->m_user->hapus($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
      redirect('user');
        
    }
 
 }
 
 /* End of file Controllername.php */
 