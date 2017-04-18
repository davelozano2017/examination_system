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
			redirect('dashboard');

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

			redirect('dashboard');

		}


	}

	public function login()
	{

				// set validation rules
		$this->validate('username', 'Username', 'trim|required');
		$this->validate('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$data = array('errors'=>validation_errors(' <i class="fa fa-remove"></i> '));
			$this->session->set_flashdata($data);
			redirect('login');
			
		} else {
			
			// set variables from the form
			$username = $this->post('username');
			$password = $this->post('password');
			
			$result = $this->model->UserLogin($username, $password);

			if ($result) {
				
				$id 	= $this->model->GetId($username);
				$user 	= $this->model->GetUserInformation($id);
				$role = $user->role;
				$newdata = array(
					        'session_id' => $id,
					        'image'  	 => $user->image,
					        'gender' 	 => $user->gender,
					        'email' 	 => $user->email,
					        'address' 	 => $user->address,
					        'date' 		 => $user->date,
					        'role' 		 => $role,
					        'name' 		 => $user->name,
					        'logged_in'  => TRUE,
					);
				switch ($role) 
				{
					case 0:
					$this->session->set_userdata($newdata);
					redirect('dashboard');
					break;

					case 1:
					$this->session->set_userdata($newdata);
					redirect('profile');
					break;
				}

			} else {
				
			$this->session->set_flashdata('notification', 'login_failed');
			redirect('login');
				
			}
			
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
			redirect('addstudents');

		}

		$gender = $this->post('gender');

		switch ($gender) 
		{
			
			case 'Male':
			$image = base_url().'assets/images/male.jpg';
			break;
			
			case 'Female':
			$image = base_url().'assets/images/female.jpg';
			break;
			
		}

		$data = array(
			'image' 	=> $image,
			'name' 		=> $this->post('name'),
			'email' 	=> $this->post('email'),
			'address' 	=> $this->post('address'),
			'gender' 	=> $gender,
			'role' 		=> 1,
			'username' 	=> $this->generate_username(),
			'password'	=> $this->encrypt(12345)
			);

		$result = $this->model->AddNewStudents($data);

		if($result)
		{

			redirect('addstudents');

		}

	}

	public function logout()
	{

		unset($_SESSION['name'],$_SESSION['session_id'],$_SESSION['logged_in'],$_SESSION['role']);
		redirect('login');

	}
	

	private function encrypt($password) 
	{
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}

	


	

}