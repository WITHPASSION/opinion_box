<?php
class Answers_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_questions_all()
	{
		$this->load->database();
		$query = $this->db->get('answers');
		return $query->result();
	}
	function insert_auestions()
	{
		$this->load->database();
		$data = array(
			'question_id' => $_POST['quetion_id'];
			'choice_id' => $_POST['choice_id'];
			);
		$this->db->insert('answers' , $data);
		return $data->result();
	}
}
?>
