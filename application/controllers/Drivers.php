<?php 

	class Drivers extends CI_Controller{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('drivers/view');
			$this->load->view('templates/footer');
		}

		public function add(){

			$this->load->view('templates/header');
			$this->load->view('drivers/add');
			$this->load->view('templates/footer');
		}

		public function edit(){

			$this->load->view('templates/header');
			$this->load->view('drivers/edit');
			$this->load->view('templates/footer');
		}

		public function delete(){

			$this->load->view('templates/header');
			$this->load->view('drivers/delete');
			$this->load->view('templates/footer');
		}
	}