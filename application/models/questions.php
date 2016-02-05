<?php
class Questions extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_questionsAll()
	{
			$this->load->database();
			$query = $this->db->get('questions')
			return $query->result();
}
	function insert_auestions()
	{
			$this->load->database();
			$data = array(
				'question_name' => $_POST['question_name'];
				'question_content' => $_POST['question_content'];
				);
			$this->db->insert('questions' , $data);
	}
}
?>
