<?php if(!defined('BASEPATH')) exit('No direct script allowed');
	class Logout extends CI_Controller{
		public function index(){
			$this->load->view('Scripts/logoutScript');
			header('Location: ' . "/");
		}
	}
?>