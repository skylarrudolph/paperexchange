<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class RegisterUser extends CI_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
	}
}