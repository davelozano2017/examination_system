<?php 

defined('BASEPATH') or exit ('No direct script allowed');

class addstudents extends CI_Controller
{


	public function index()
	{
		
		$data['url'] = base_url();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs');
		$this->load->view('template/pages/admin/addstudents',$data);
		$this->load->view('template/components/footer',$data);

	}
	

}