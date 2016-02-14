<?php
class Question_model extends CI_Model 
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
	function insert_question($question, $choices)
	{  
		$this->load->database();
		$this->db->insert('questions', $question);
		$id = $this->db->insert_id();
		foreach($choices as $key => $value){
			$choice = array("question_id" => $id, 'choice_number' => $key+1, 'choice' => $value );
			$this->db->insert('choices', $choice);
		}

	}
	function get_question($id)
	{
		$this->load->database();
		$data = $this->db->get_where('questions', array('id' => $id));
		return $data->row();

	}
}
