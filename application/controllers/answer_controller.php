<?php
class Answer_controller extends CI_Controller{
		public function index($id)
		{
				$this->load->model('Question_model');
				$this->load->model('Choice_model');
				$query = new Question_model();
				$data['question'] = $query->get_question($id);	
				$query = new Choice_model();
				$data['choices'] = $query->get_choices($id);
				$this->load->view('choice', $data);
		}
		public	function create()
		{
				$answer = array(
					'choice_id' => $this->input->post('choice_id'),
					'question_id' =>$this->input->post('question_id')
					 );
				$this->load->model('Answer_model');
				$this->Answer_model->insert_answer($answer);
				$this->load->helper('url');
				redirect('/');
		}

}

