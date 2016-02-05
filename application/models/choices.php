<?php
class Choices  extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_choicesAll()
	{
			$this->load->database();
			$query = $this->db->get('choices');
			return $query->result();
}
	function insert_choices()
	{
			$this->load->database();
			$data = array(
				'question_id' => $_POST['question_id'];
				'choice_name' => $_POST['choice_number'];
				'choice' => $_POST['choice'];
				);
			$this->db->insert('choice' , $data);
	}
?>
