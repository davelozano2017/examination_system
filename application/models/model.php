<?php 

defined('BASEPATH') or exit('No direct access script allowed.');

class model extends CI_Model
{

	public function __construct()
	{

		parent::__construct();

	}

	public function CountRegisteredUser()
	{

		return $this->db->where('role', 1)->count_all_results('es_accounts_tbl');

	}

	public function FetchRegisteredUser()
	{

		$check = $this->db->get('es_school_information');
		if($check->num_rows() > 0)
		{

			$result = $this->db->where('role',1)->get('es_accounts_tbl');
			return $result->result();

		} else {

			return TRUE;
		}

	}


	public function UploadProfile($image,$id)
	{


		$result = $this->db->where(['id'=>$id])->set('image',$image)->update('es_accounts_tbl');
		$this->session->set_flashdata('notification','myaccount_updated');
		return $result;
	
	}

	public function GetSchoolInformation()
	{


		$result = $this->db->get('es_school_information');
		return $result->result();

	}

	public function delete_all()
	{

		$result = $this->db->where('role',1)->delete('es_accounts_tbl');
		$this->session->set_flashdata('notification','deleted');
		return $result;

	}

	public function UserLogin($username,$password)
	{

		$this->db->select('password')->from('es_accounts_tbl')->where('username', $username);
		$hash = $this->db->get()->row('password');
		return $this->verify($password, $hash);

	}

	public function SchoolLogo($image,$id)
	{


		$result = $this->db->where(['id'=>$id])->set('image',$image)->update('es_school_information');
		$this->session->set_flashdata('notification','updated');
		return $result;

	}

	public function InsertOrUpdate($data)
	{

		$check = $this->db->get('es_school_information');
		if($check->num_rows() > 0)
		{

			$result = $this->db->where(['id' => $data['id']])->update('es_school_information',$data);
			$this->session->set_flashdata('notification','updated');
			return $result;

		} else {

			$result = $this->db->insert('es_school_information',$data);
			$this->session->set_flashdata('notification','success');
			return $result;
		
		}

	}

	public function GetInformation($id)
	{

		$result = $this->db->where(['id'=>$id])->get('es_accounts_tbl');
		return $result->result();

	}

	public function GetMailCredentials()
	{

		$result = $this->db->get('es_mail_credentials');
		return $result->result();

	}

	public function GetQuestions()
	{

		$result = $this->db->get('es_questions_tbl');
		return $result->result();

	}

	public function GetStudentInfo($id)
	{

		$result = $this->db->where(['id'=>$id])->get('es_accounts_tbl');
		return $result->result();

	}

	public function UpdateAccount($data,$id)
	{

		
		$result = $this->db->where(['id'=>$id])->update('es_accounts_tbl',$data);
		$this->session->set_flashdata('notification','myaccount_updated');
		return $result;

	}

	public function DeleteAccount($id)
	{

		
		$result = $this->db->where(['id'=>$id])->delete('es_accounts_tbl');
		$this->session->set_flashdata('notification','student_successfully_deleted');
		return $result;

	}

	

	public function MyAccountUpdatePassword($data,$id)
	{

		
		$result = $this->db->where(['id'=>$id])->update('es_accounts_tbl',$data);
		$this->session->set_flashdata('notification','myaccount_updated');
		return $result;

	}


	public function AddNewStudents($data)
	{	

		$check = $this->db->select('email')->from('es_accounts_tbl')->where(array('email' => $data['email']))->get();
		if($check->num_rows() > 0)
		{

			$this->session->set_flashdata('notification','duplicated_email_student');
			return $check;

		} else {

			$result = $this->db->insert('es_accounts_tbl',$data);
			$this->session->set_flashdata('notification','success_add_student');
			return $result;

		}
	
	}

	public function AddNewQuestions($data)
	{

		$result = $this->db->insert('es_questions_tbl',$data);
		$this->session->set_flashdata('notification','success_add_question');
		return $result;

	}

	public function GetId($username) 
	{
		
		$this->db->select('id')->from('es_accounts_tbl')->where('username', $username);
		return $this->db->get()->row('id');
		
	}

	public function GetUserInformation($user_id) 
	{
		
		$this->db->from('es_accounts_tbl')->where('id', $user_id);
		return $this->db->get()->row();
		
	}

	public function GetAllUsers()
	{

		$result = $this->db->where(['role'=>1])->get('es_accounts_tbl');
		return $result->result();

	}


	private function verify($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

}