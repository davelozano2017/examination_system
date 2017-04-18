<?php 

defined('BASEPATH') or exit ('No direct script allowed.');

class profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])) { redirect('login'); }
	}

	public function index()
	{
		
		$data['res'] = array(
			'page_title' 	=> 	'Online Examination System',
			'title'			=>	'Examination System',
			'greetings'		=>	'Howdy,'
			);
		$data['url'] = base_url();
		$data['data'] = $this->session->userdata();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/student/navs/navs');
		$this->load->view('template/pages/student/profile',$data);
		$this->load->view('template/components/footer',$data);

	}
}