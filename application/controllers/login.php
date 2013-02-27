<?php if(!defined('BASEPATH')) exit('No direct script allowed');
	class Login extends CI_Controller {
		public function index(){
			$this->load->view('header');
			$this->load->view('loginPage');
			$this->load->view('footer');
		}
	}
?>