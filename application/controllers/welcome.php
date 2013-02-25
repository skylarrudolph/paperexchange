<?php if(!defined('BASEPATH')) exit('No direct script allowed');

	class Welcome extends CI_Controller {
		public function index(){
			$this->load->view('header');
			$this->load->view('welcome_message');
			$this->load->view('footer');
		}
	}
	?>
