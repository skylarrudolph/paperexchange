<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class AccountInfo extends CI_Controller {
		public function index(){
			$this->load->view('header');
			$this->load->view('accountInfo');
			$this->load->view('footer');
		}
	}
?>
