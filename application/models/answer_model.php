<?php
class Answers extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_questionsAll()
	{
			$this->load->database();
			$query = $this->db->get('answer');
			return $query->result();1
}
	function insert_auestions()
	{
			$this->load->database();
			$data = array(
				'question_id' => $_POST['quetion_id'];
				'choice_id' => $_POST['choice_id'];
				);
			$this->db->insert('answer' , $data);
	}
}
?>
