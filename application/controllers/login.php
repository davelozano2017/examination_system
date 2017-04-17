<?php 
defined('BASEPATH') or exit ('No direct access script allowed.');

class login extends CI_Controller 
{

	public function index()
	{

		$data['url'] = base_url();
		$this->load->view('template/pages/login',$data);
		
	}


}