<?php 
	class Reports extends CI_Controller{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('reports/view');
			$this->load->view('templates/footer');
		}
	}