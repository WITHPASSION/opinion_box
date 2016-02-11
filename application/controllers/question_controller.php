<?php
class Question_controller extends CI_Controller{
		public function index(){
				$this->load->view('question');

				$data = array(
				'question_name' => $this->input->post('question_name'),
				'question_content' => $this->input->post('question_content')
			);

			//$this->load->model('Question', $data);
			var_dump($data);
		}

		//function edit()
		//{

				//$data = array(
				//'question_name' => $this->input->post('question_name'),
				//'question_content' => $this->input->post('question_content')
			//);
			//var_dump($data);
			//$this->load->view('question');
			//$this->load->model('Question', $data);
			//$this->Question->insert_question($data);	
			
		//}
}


