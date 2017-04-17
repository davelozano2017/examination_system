<?php 

defined('BASEPATH') or exit ('No direct script allowed.');

class execute extends CI_Controller 
{


	public function __construct()
	{

		parent::__construct();

	}

	public function generate_username()
	{
    
	    return sprintf( 'OES-%04x'.rand(111,999),
	        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
	        mt_rand( 0, 0xffff ),
	        mt_rand( 0, 0x0C2f ) | 0x4000,
	        mt_rand( 0, 0x3fff ) | 0x8000,
	        mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
	    );

	}


	public function validate($a,$b,$c)
	{

		return $this->form_validation->set_rules($a,$b,$c);

	}

	public function post($a)
	{

		return $this->input->post($a);

	}



	public function InsertUpdate()
	{	
		$data = array(
			'normal' => 'trim|required|xss_clean',
			'email' => 'trim|required|valid_email|xss_clean',
			'number' => 'trim|required|max_length[11]|min_length[11]|xss_clean',
			'name' => 'trim|required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean'
			);

		$this->validate('name','School Name',$data['normal']);
		$this->validate('email','School Email',$data['email']);
		$this->validate('address','School Address',$data['normal']);
		$this->validate('contact','School Contact Number',$data['number']);
		$this->validate('slogan','School Slogan',$data['normal']);

		if($this->form_validation->run() == FALSE)
		{

			$data = array('errors'=>validation_errors());
			$this->session->set_flashdata($data);
			redirect('dashboard','refresh');

		}

		$data = array(
			'id' 		=> $this->post('id'),
			'name' 		=> $this->post('name'),
			'email' 	=> $this->post('email'),
			'address' 	=> $this->post('address'),
			'contact' 	=> $this->post('contact'), 
			'slogan' 	=> $this->post('slogan') 
			);

		$result = $this->model->InsertOrUpdate($data);
		if($result)
		{

			redirect('dashboard','refresh');

		}


	}

	public function add_student()
	{

		$data = array(
			'normal' => 'trim|required|xss_clean',
			'email' => 'trim|required|valid_email|xss_clean',
			'number' => 'trim|required|max_length[11]|min_length[11]|xss_clean',
			'name' => 'trim|required|regex_match[/^([a-zA-Z]|\s)+$/]|xss_clean'
			);

		$this->validate('name','Student Name',$data['name']);
		$this->validate('email','Student Email',$data['email']);
		$this->validate('address','Student Address',$data['normal']);
		$this->validate('gender','Student Gender',$data['normal']);

		if($this->form_validation->run() == FALSE)
		{

			$data = array('errors'=>validation_errors());
			$this->session->set_flashdata($data);
			redirect('addstudents','refresh');

		}

		$data = array(
			'name' 		=> $this->post('name'),
			'email' 	=> $this->post('email'),
			'address' 	=> $this->post('address'),
			'gender' 	=> $this->post('gender'),
			'role' 		=> 1,
			'username' 	=> $this->generate_username(),
			'password'	=> 12345
			);

		$result = $this->model->AddNewStudents($data);

		if($result)
		{
			redirect('addstudents','refresh');
		}

	}


}