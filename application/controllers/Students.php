<?php 
	class Students extends CI_Controller{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('students/view');
			$this->load->view('templates/footer');
		}

		public function add(){

			$this->load->view('templates/header');
			$this->load->view('students/add');
			$this->load->view('templates/footer');
		}

		public function edit(){

			$this->load->view('templates/header');
			$this->load->view('students/edit');
			$this->load->view('templates/footer');
		}

		public function delete(){

			$this->load->view('templates/header');
			$this->load->view('students/delete');
			$this->load->view('templates/footer');
		}
	}