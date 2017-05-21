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
		echo 'ok';
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

	public function CategoryDelete($id)
	{

		$result = $this->db->where(['id'=>$id])->delete('es_category_tbl');
		$this->session->set_flashdata('notification','deleted');
		return $result;

	}

	public function QuestionsDelete($id)
	{

		$result = $this->db->where(['id'=>$id])->delete('es_questions_tbl');
		$this->session->set_flashdata('notification','deleted');
		return $result;

	}

	public function InstructionsDelete($id)
	{

		$result = $this->db->where(['id'=>$id])->delete('es_instructions_tbl');
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

	public function GetQuestionsById($id)
	{

		$result = $this->db->where(['id'=>$id])->get('es_questions_tbl');
		return $result->result();

	}

	public function GetCategoryById($id)
	{

		$result = $this->db->where(['id'=>$id])->get('es_category_tbl');
		return $result->result();

	}

	public function GetInstructionsById($id)
	{

		$result = $this->db->where(['id'=>$id])->get('es_instructions_tbl');
		return $result->result();

	}

	public function GetMailCredentials()
	{

		$result = $this->db->get('es_mail_credentials');
		return $result->result();

	}

	public function GetAllQuestions()
	{

		$result = $this->db->order_by('id','RANDOM')->get('es_questions_tbl',20);
		return $result->result();

	}

	public function GetAllInformation()
	{

		$result = $this->db->get('es_school_information');
		return $result->result();

	}

	public function GetAllCategory()
	{

		$result = $this->db->get('es_category_tbl');
		return $result->result();

	}

	public function GetAllInstructions()
	{

		$result = $this->db->get('es_instructions_tbl');
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

			echo 'error';

		} else {

			$result = $this->db->insert('es_accounts_tbl',$data);
			$this->session->set_flashdata('notification','success_add_student');
			return $result;

		}
	
	}

	public function UpdateQuestions($data)
	{

		$result = $this->db->where(['id'=>$data['id']])->update('es_questions_tbl',$data);
		$this->session->set_flashdata('notification','success_update_question');
		return $result;

	}

	public function UpdateCategory($data)
	{

		$result = $this->db->where(['id'=>$data['id']])->update('es_category_tbl',$data);
		$this->session->set_flashdata('notification','success_update_category');
		return $result;

	}

	public function UpdateInstructions($data)
	{

		$result = $this->db->where(['id'=>$data['id']])->update('es_instructions_tbl',$data);
		$this->session->set_flashdata('notification','success_update_instructions');
		return $result;

	}

	public function AddNewQuestions($data)
	{

		$result = $this->db->insert('es_questions_tbl',$data);
		$this->session->set_flashdata('notification','success_add_question');
		return $result;

	}

	public function AddNewInstructions($data)
	{

		$result = $this->db->insert('es_instructions_tbl',$data);
		$this->session->set_flashdata('notification','success_add_instructions');
		return $result;

	}

	public function AddNewCategory($data)
	{

		$result = $this->db->insert('es_category_tbl',$data);
		$this->session->set_flashdata('notification','success_add_category');
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