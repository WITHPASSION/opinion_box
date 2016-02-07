<?php
class Choice extends CI_Controller{
		public function index($id){
				$this->load->model('Question');
				$this->load->model('Choice_model');
				$query = new Question();
				$data['question'] = $query->get_question($id);	
				$query = new Choice_model();
				$data['choices'] = $query->get_choices($id);
				$this->load->view('choice', $data);

		}
}

