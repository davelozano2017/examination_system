<?php 
defined('BASEPATH') or exit ('No direct script allowed.');

class emailconfiguration extends CI_Controller
{

	public function index()
	{

		$data['url'] = base_url();
		$data['res'] = array(
			'page_title' 	=> 'Online Examination System',
			'title'			=>'Examination System',
			'greetings'		=>'Howdy,'
			);
		$data['credentials'] = $this->model->GetMailCredentials();
		$data['admin_data'] = $this->model->GetInformation($_SESSION['session_id']);
		$data['data'] = $this->session->userdata();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs');
		$this->load->view('template/pages/admin/configuration',$data);
		$this->load->view('template/components/footer',$data);


	}

}