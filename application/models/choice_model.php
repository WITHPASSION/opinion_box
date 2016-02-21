<?php
class Choice_model  extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_choice_all()
	{
		$this->load->database();
		$query = $this->db->get('choices');
		return $query->result();
	}

	function insert_choice()
	{
		$this->load->database();
		$data = array(
			'question_id' => $_POST['question_id'],
			'choice_name' => $_POST['choice_number'],
			'choice' => $_POST['choice']
			);
		$this->db->insert('choice',$data);
	}

	function get_choices($id)
	{
		$this->load->database();
		$this->db->order_by('choice_number', 'asc');
		$data = $this->db->get_where('choices', array('question_id'=>$id));
		return $data->result();
	}
}
