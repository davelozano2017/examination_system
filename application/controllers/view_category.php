<?php 
defined('BASEPATH') or exit ('No direct script allowed.');

class view_category extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{
		
		$data['res'] = array(
			'page_title' 	=> 'Online Examination System',
			'title'			=> 'Examination System',
			'greetings'		=> 'Howdy,'
			);
        $data["results"] 	= $this->model->FetchRegisteredUser();
		$data['url'] 		= base_url();
		$data['data'] 		= $this->session->userdata();
		$data['user'] 		= $this->model->GetAllUsers();
		$data['category'] 	= $this->model->GetAllCategory();
		$data['admin_data'] = $this->model->GetInformation($_SESSION['session_id']);
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs',$data);
		$this->load->view('template/pages/admin/view_category',$data);
		$this->load->view('template/components/footer',$data);

	}

}