<?php 

defined('BASEPATH') or exit('No direct access script allowed.');

class model extends CI_Model
{

	public function __construct()
	{

		parent::__construct();

	}

	public function CountRegisteredUsers()
	{

		return $this->db->where('role', 1)->count_all_results('es_accounts_tbl');

	}

	public function CountStudentAttended()
	{

		return $this->db->count_all_results('es_results_tbl');

	}

	public function CountPassingStudents()
	{

		return $this->db->where(['status'=>'Passed'])->count_all_results('es_results_tbl');

	}

	public function CountFailedStudents()
	{

		return $this->db->where(['status'=>'Failed'])->count_all_results('es_results_tbl');

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
		echo 'updated';
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
		echo 'success';
		return $result;

	}

	public function QuestionsDelete($id)
	{

		$result = $this->db->where(['id'=>$id])->delete('es_questions_tbl');
		return $result;

	}

	public function InstructionsDelete($id)
	{

		$result = $this->db->where(['id'=>$id])->delete('es_instructions_tbl');
		echo 'success';
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
		return $result;

	}

	public function InsertOrUpdate($data)
	{

		$check = $this->db->get('es_school_information');
		if($check->num_rows() > 0)
		{

			$result = $this->db->where(['id' => $data['id']])->update('es_school_information',$data);
			echo 'updated';
			return $result;

		} else {

			$result = $this->db->insert('es_school_information',$data);
			echo 'success';
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

	public function GetAllInformation()
	{

		$result = $this->db->get('es_school_information');
		return $result->result();

	}

	public function GetResultsByEmail($email) 
	{

		$result = $this->db->select(
			'es_accounts_tbl.email, es_accounts_tbl.gender, es_results_tbl.email, 
			 es_results_tbl.name, es_results_tbl.score, es_results_tbl.status,
			 es_results_tbl.date,es_results_tbl.percentage')->from('es_accounts_tbl')->join('es_results_tbl','es_accounts_tbl.email = es_results_tbl.email')
			->where('es_accounts_tbl.email',$email)->get();
		return $result->result();

	}


	public function GetAllCategory()
	{

			$query = $this->db->get('es_category_tbl');
			return $query->result_array();

	}

	public function GetAllInstructions()
	{

		$result = $this->db->get('es_instructions_tbl');
		return $result->result_array();

	}

	public function GetAllResults()
	{

		$result = $this->db->get('es_results_tbl');
		return $result->result();

	}

	public function GetAllQuestions()
	{

		$result = $this->db->get('es_questions_tbl');
		return $result->result_array();

	}

	public function GetQuestionByAnswer()
	{

		$result = $this->db->select('answer')->from('es_questions_tbl')->get();
		return $result->result_array();

	}
	
	public function GetStudentInfo($id)
	{

		$result = $this->db->where(['id'=>$id])->get('es_accounts_tbl');
		return $result->result();

	}

	public function UpdateAccount($data,$id)
	{

		
		$result = $this->db->where(['id'=>$id])->update('es_accounts_tbl',$data);
		echo 'updated';
		return $result;

	}

	public function DeleteAccount($id)
	{

		
		$result = $this->db->where(['id'=>$id])->delete('es_accounts_tbl');
		return $result;

	}

	

	public function MyAccountUpdatePassword($data,$id)
	{

		
		$result = $this->db->where(['id'=>$id])->update('es_accounts_tbl',$data);
		echo 'updated';
		return $result;

	}


	public function AddNewStudents($data)
	{	

		$check = $this->db->select('email')->from('es_accounts_tbl')->where(array('email' => $data['email']))->get();
		if($check->num_rows() > 0)
		{

			return $this->session->set_userdata('notif','duplicated');

		} else {

			$this->db->insert('es_accounts_tbl',$data);
			$result = $this->session->set_userdata('notif','success');
			return $result;

		}
	
	}

	public function UpdateQuestions($data)
	{

		$result = $this->db->where(['id'=>$data['id']])->update('es_questions_tbl',$data);
		echo 'updated';
		return $result;

	}

	public function UpdateCategory($data)
	{

		$result = $this->db->where(['id'=>$data['id']])->update('es_category_tbl',$data);
		echo 'success';
		return $result;

	}

	public function UpdateInstructions($data)
	{

		$result = $this->db->where(['id'=>$data['id']])->update('es_instructions_tbl',$data);
		echo 'success';
		return $result;

	}

	public function AddNewQuestions($data)
	{

		$result = $this->db->insert('es_questions_tbl',$data);
		echo 'success';
		return $result;

	}

	public function AddNewInstructions($data)
	{

		$result = $this->db->insert('es_instructions_tbl',$data);
		echo 'success';
		return $result;

	}

	public function AddNewCategory($data)
	{

		$result = $this->db->insert('es_category_tbl',$data);
		echo 'success';
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

	public function CalculateResult($data) {

		$result = $this->db->insert('es_temp_tbl',$data);
		return $result;
	
	}

	public function DeleteTempTable($code) {

		$result = $this->db->where(['code'=>$code])->delete('es_temp_tbl');
		return $result;
	}

	public function ExaminationResult($data) {


		$result = $this->db->insert('es_results_tbl',$data);
		return $result;

	}

	public function CountScore($code)
	{

		$check = $this->db->where(['status'=>'correct','code'=>$code])->get('es_temp_tbl');
		$count = $check->num_rows();
		return $_SESSION['score'] = $count;

	}

	public function GetResult($email) {

		$result = $this->db->where(['email'=>$email])->get('es_results_tbl');
		return 	$result->result();
	}

	public function CheckResultByEmail($email)
	{

		$check = $this->db->select('email')->from('es_results_tbl')->where(['email' => $email])->get();
		if($check->num_rows() == 1)
		{

			echo 'finished';
			$_SESSION['done'] = 'Active';
			return $check;

		} else {

			echo 'unfinish';
			
		
		}

	}

	private function verify($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

}