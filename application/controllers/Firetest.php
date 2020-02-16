<?php 
	class Firetest extends CI_Controller{

		public function test(){

			$this->load->library('firebase');
			$firebase = $this->firebase->init();
			$db = $firebase->getDatabase();
		}
	}