<?php 
	class Parents extends CI_Controller{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('parents/view');
			$this->load->view('templates/footer');
		}

		public function add(){

			$this->load->view('templates/header');
			$this->load->view('parents/add');
			$this->load->view('templates/footer');
		}

		public function edit(){

			$this->load->view('templates/header');
			$this->load->view('parents/edit');
			$this->load->view('templates/footer');
		}

		public function delete(){

			$this->load->view('templates/header');
			$this->load->view('parents/delete');
			$this->load->view('templates/footer');
		}
	}