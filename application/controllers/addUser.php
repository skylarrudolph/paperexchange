<?php if(!defined('BASEPATH')) exit('No direct script allowed');

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

				$hashed_password = $this->createPasswordHashWithSalt($_POST["email"], $_POST["password"]);
				$user_email = $_POST["email"];

				$this->load->database();

				$check = "SELECT * FROM  `project_oddjobs`.`workforcebids_user_details` WHERE `user_email`='" . $user_email ."';";
				$result = mysql_query($check);
				$num_rows = mysql_num_rows($result);
				// echo $num_rows;
				if($num_rows > 0){
					header ('Location: ' . 'registerUser?emailExists=TRUE');
				} else {
					$sql = "INSERT INTO `project_oddjobs`.`workforcebids_user_details` (`user_email`, `hashed_password`) VALUES ('" . $user_email . "', '" . $hashed_password . "');";
					
					$result = mysql_query($sql);
					header('Location: ' . '/index.php');					
				}


			}

		}

	}

?>