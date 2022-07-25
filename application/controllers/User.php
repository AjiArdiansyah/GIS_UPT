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
 
 }
 
 /* End of file Controllername.php */
 