<?php 
defined('BASEPATH') or exit ('No direct access script allowed.');

class dashboard extends CI_Controller 
{

	public function index()
	{
		
		$data['result'] = $this->model->GetSchoolInformation();
		$data['url'] = base_url();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/pages/admin/navs/navs');
		$this->load->view('template/pages/admin/dashboard',$data);
		$this->load->view('template/components/footer',$data);

	}

}