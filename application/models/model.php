<?php 

defined('BASEPATH') or exit('No direct access script allowed.');

class model extends CI_Model
{

	public function __construct()
	{

		parent::__construct();

	}

	public function GetSchoolInformation()
	{

		$result = $this->db->get('es_school_information');
		return $result->result();

	}


	public function InsertOrUpdate($data)
	{

		$check = $this->db->get('es_school_information');
		if($check->num_rows() > 0)
		{

			$this->db->where(['id' => $data['id']]);
			$result = $this->db->update('es_school_information',$data);
			$this->session->set_flashdata('notification','updated');
			return $result;

		} else {

			$result = $this->db->insert('es_school_information',$data);
			$this->session->set_flashdata('notification','success');
			return $result;
		
		}

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

}