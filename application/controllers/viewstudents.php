<?php 
defined('BASEPATH') or exit ('No direct script allowed.');

class viewstudents extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{
		

        $data["results"] 	= $this->model->FetchRegisteredUser();
		$data['url'] 		= base_url();
		$data['data'] 		= $this->session->userdata();
		$data['user'] 		= $this->model->GetAllUsers();
		$data['admin_data'] = $this->model->GetAdminInformation($_SESSION['session_id']);
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs',$data);
		$this->load->view('template/pages/admin/viewstudents',$data);
		$this->load->view('template/components/footer',$data);

	}

}