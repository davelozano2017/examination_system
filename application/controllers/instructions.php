<?php 
defined('BASEPATH') or exit ('No direct access allowed.');

class instructions extends CI_Controller 
{


	public function modify($id) 
	{

		$data['res'] = array(
			'page_title' 		=> 'Online Examination System',
			'title'				=> 'Examination System',
			'greetings'			=> 'Howdy,'
			);
		$data['data'] 			= $this->session->userdata();
		$data['url'] 			= base_url();
		$data['result'] 		= $this->model->GetSchoolInformation();
		$data['admin_data'] 	= $this->model->GetInformation($_SESSION['session_id']);
		$data['instructions'] 	= $this->model->GetInstructionsById($id);
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs');
		$this->load->view('template/pages/admin/modify_instructions',$data);

	}


}