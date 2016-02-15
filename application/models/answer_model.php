<?php
class Answer_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_answers_all()
	{
		$this->load->database();
		$query = $this->db->get('answers');
		return $query->result();
	}
	function insert_answer($answer)
	{
		$this->load->database();
		$this->db->insert('answers' , $answer);
		var_dump($answer);
	}
}
?>
