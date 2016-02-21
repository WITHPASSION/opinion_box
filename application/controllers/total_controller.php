<?php
class Total_controller extends CI_Controller{
		public function index($id)
		{
				$this->load->model('Question_model');
				$this->load->model('Answer_model');
				$query = new Question_model();
				$data['question'] = $query->get_question($id);	
				$query = new Answer_model();
				$data['results'] = $query->total($id);
				$this->load->view('total', $data);
				

		}
}
