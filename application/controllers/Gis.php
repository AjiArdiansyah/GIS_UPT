<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis extends CI_Controller {

	public function index()
	{
        $data = array(
            'judul' => 'Home',
            'page' => 'v_home',
        );
		$this->load->view('v_template', $data, false);
	}

    public function viewmap()
	{
        $data = array(
            'judul' => 'View Map',
            'page' => 'v_view_map',
        );
		$this->load->view('v_template', $data, false);
	}

    public function viewbasemap()
	{
        $data = array(
            'judul' => 'View Base Map',
            'page' => 'v_base_map',
        );
		$this->load->view('v_template', $data, false);
	}

    public function marker()
	{
        $data = array(
            'judul' => 'marker',
            'page' => 'v_marker',
        );
		$this->load->view('v_template', $data, false);
	}
}
