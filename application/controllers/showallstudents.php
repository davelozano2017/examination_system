<?php 
defined('BASEPATH') or exit ('No direct access script allowed.');

class showallstudents extends CI_Controller 
{

	public function __construct()
	{
	
		parent::__construct();
		
	}

	public function index()
	{	
		
		$data['url'] 		= base_url();
		$data["results"] 	= $this->model->FetchRegisteredUser();
		$this->load->view('template/pages/admin/showallstudents',$data);

	}

}