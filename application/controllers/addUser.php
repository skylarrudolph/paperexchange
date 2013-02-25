<?php

	class AddUser extends CI_Controller{
		
		function validateEmail($email){
			$this->load->helper('email');
			return valid_email($email);
		}

		function validatePassword($password, $password2){
			if(strlen($password) && strlen($password2))
				return !strcasecmp($password, $password2);
			else return FALSE;
		}

		public function createPasswordHashWithSalt($email, $password){
			$salt = hash('sha256', uniqid(mt_rand(), true) . 'sjr613' . strtolower($email));

			$hash = $salt . $password;

			for($i=0; $i<100000; $i++){
				$hash = hash('sha256', $hash);
			}

			$hash = $salt . $hash;

			return $hash;
		}

		// This will need to be pushed to verifying login information.
		// public function verifyPassword($username, $password){

				// $salt2 = substr($x, 0, 64);
				// $hash2 = $salt2 . $_POST["password"];
				// for($i = 0; $i < 100000; $i++){
				// 	$hash2 = hash('sha256', $hash2);
				// }
				// $hash2 = $salt2 . $hash2;

				// if($hash2 == $x){
				// 	echo $hash2;
				// }

		// }

		public function index(){

			$errorArray = array();

			if(!($this->validateEmail($_POST["email"]))){
				$errorArray['emailCheck'] = 'false';
			}
			if(!($this->validatePassword($_POST["password"], $_POST["confirm_password"]))){
				$errorArray['passwordCheck'] = 'false';
			}
			if(count($errorArray)){
				$redirectURL = "registerUser?";
				foreach (array_keys($errorArray) as $key => $value) {
					$redirectURL = $redirectURL . $value . '=' . $errorArray[$value] . '&';
				}
				$redirectURL = substr($redirectURL, 0, -1);
				header('Location: ' . $redirectURL);
			}

			else {
				$x = $this->createPasswordHashWithSalt($_POST["email"], $_POST["password"]);
				//var_dump($x);
				header('Location: ' . '/OddJobs/index.php');




			}

		}

	}

?>