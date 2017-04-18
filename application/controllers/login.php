<?php 
defined('BASEPATH') or exit ('No direct access script allowed.');

class login extends CI_Controller 
{

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{
		$data['url'] = base_url();
		$data['data'] = $this->session->userdata();
		$this->load->view('template/pages/login',$data);
		
	}


}