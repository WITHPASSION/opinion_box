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
		$this->db->select('choice, COUNT(answers.id) as count');
		$this->db->join('answers', 'choices.id=answers.choice_id', 'left');
		$this->db->where('choices.question_id', $id);
		$this->db->group_by('choice_id');
		$query = $this->db->get('choices');
		return $query->result();

	}

}
