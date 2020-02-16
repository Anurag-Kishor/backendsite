<?php 
	class Buses extends CI_Controller{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('buses/view');
			$this->load->view('templates/footer');
		}

		public function add(){

			$this->load->view('templates/header');
			$this->load->view('buses/add');
			$this->load->view('templates/footer');
		}

		public function edit(){

			$this->load->view('templates/header');
			$this->load->view('buses/edit');
			$this->load->view('templates/footer');
		}

		public function delete(){

			$this->load->view('templates/header');
			$this->load->view('buses/delete');
			$this->load->view('templates/footer');
		}
	}