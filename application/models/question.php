<?php
class Question extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	function get_questions_all()
	{
		$this->load->database();
		$query = $this->db->get('questions');
		return $query->result();
	}
	function insert_auestions()
	{
		$this->load->database();
		$data = array(
			'question_name' => $_POST['question_name'],
			'question_content' => $_POST['question_content']
			);
		$this->db->insert('questions' , $data);
		return $data->result();
	}
	function get_question($id)
	{
		$this->load->database();
		$data = $this->db->get_where('questions', array('id' => $id));
		return $data->row();

	}
}
