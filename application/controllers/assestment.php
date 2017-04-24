<?php 
defined('BASEPATH') or exit ('No direct script allowed.');

class assestment extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{
		
		$data['res'] = array(
			'page_title' 	=> 	'Online Examination System',
			'title'			=>	'Examination System',
			'greetings'		=>	'Howdy,'
			);
		$data['url'] = base_url();
		$data['user_data'] = $this->model->GetInformation($_SESSION['session_id']);
		$data['data'] = $this->session->userdata();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/student/navs/navs');
		$this->load->view('template/pages/student/assestment',$data);
		$this->load->view('template/components/footer',$data);

	}

}