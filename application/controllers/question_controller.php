<?php
class Question_controller extends CI_Controller{
		public function index(){
				$this->load->view('question');
		}

		function create()
		{
			$question = array(
				'question_name' => $this->input->post('question_name'),
				'question_content' => $this->input->post('question_content')
			);
			 	$choices = $this->input->post('choice');
				$this->load->model('Question_model');
				$this->Question_model->insert_question($question, $choices);
		}

}


