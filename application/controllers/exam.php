<?php 
defined('BASEPATH') or exit ('No direct script allowed.');

class exam extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$_SESSION['active'] = 'Active';

	}

	public function begin()
	{
		
		$data['res'] = array(
			'page_title' 	=> 	'Online Examination System',
			'title'			=>	'Examination System',
			'greetings'		=>	'Howdy,'
			);
		$data['url'] = base_url();
		$data['user_data'] 	  = $this->model->GetInformation($_SESSION['session_id']);
		$data['data']		  = $this->session->userdata();
		$data['category'] 	  = $this->model->GetAllCategory();
		$data['information']  = $this->model->GetAllInformation();
		$data['questions']    = $this->model->GetAllQuestions();
		$data['instructions'] = $this->model->GetAllInstructions();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/student/navs/navs');
		$this->load->view('template/pages/student/begin',$data);
		$this->load->view('template/components/footer',$data);

	}

}