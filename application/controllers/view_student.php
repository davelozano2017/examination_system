<?php 
defined('BASEPATH') or exit ('No direct script allowed.');

class view_student extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

	}

	public function profile($id)
	{
		
		$data['res'] = array(
			'page_title' 	=> 'Online Examination System',
			'title'			=> 'Examination System',
			'greetings'		=> 'Howdy,'
			);
		$data['count'] = $this->model->CountRegisteredUser();
		$data['data'] = $this->session->userdata();
		$data['result'] = $this->model->GetSchoolInformation();
		$data['url'] = base_url();
		$data['admin_data'] = $this->model->GetAdminInformation($_SESSION['session_id']);
		$data['student_info'] = $this->model->GetStudentInfo($id);
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs');
		$this->load->view('template/pages/admin/student_profile',$data);
		$this->load->view('template/components/footer',$data);

	}

}