<?php
class Top extends CI_Controller{
		public function index()
		{
			$this->load->model('Question');
			$query = new Question();
			$data['questions'] = $query->Question->get_questions_all();
			$this->load->view('top', $data);
		}				
}



