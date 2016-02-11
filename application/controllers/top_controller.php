<?php
class Top_controller extends CI_Controller{
		public function index()
		{
			$this->load->model('Question_model');
			$query = new Question_model();
			$data['questions'] = $query->Question_model->get_questions_all();
			$this->load->view('top', $data);
		}				
}



