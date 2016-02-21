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
	}

	function total($id)
	{
		$this->load->database();
		$this->db->select('choice,CASE WHEN answers.id IS NULL THEN 0  ELSE COUNT(answers.id) END as count');
		$this->db->join('answers', 'choices.id=answers.choice_id', 'left outer');
		$this->db->where('choices.question_id', $id);
		$this->db->group_by('choice');
		$this->db->order_by('choice_number','asc');
		$query = $this->db->get('choices');
		return $query->result();

	}

}
