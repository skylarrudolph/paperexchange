<?php if(!defined('BASEPATH')) exit('No direct script allowed');


	class LoginUser extends CI_Controller{

		public $user;
		public $pass;
		public $email;

		private function decryptAndComparePasswords($dbPassword, $userInputtedPass){
			 $salt2 = substr($dbPassword, 0, 64);
			 $hash2 = $salt2 . $userInputtedPass;
			 for($i = 0; $i < 100000; $i++){
			 	$hash2 = hash('sha256', $hash2);
			 }

			 $hash2 = $salt2 . $hash2;

			 if($hash2 == $dbPassword){
			 	return true;
			 } else {
			 	return false;
			 }


		}

		private function begin_session($loggedInUser){
			session_start();
			$_SESSION['loggedInUser'] = $loggedInUser;
			// var_dump($_SESSION);
		}

		private function getUserFromEmail($email){
			$this->load->database();
			$sql = "SELECT * FROM `project_oddjobs`.`workforcebids_user_details` WHERE `user_email`='" . $email . "' LIMIT 1;";
			$result = mysql_query($sql);
			
			if($result == false){
				return NULL;
			} else {
				return mysql_fetch_assoc($result);
			}
		}

		public function index(){
			if(!empty($_POST["email"]) && !empty($_POST["password"])){
				$email = $_POST["email"];
				$pass = $_POST["password"];

				$user = $this->getUserFromEmail($email);

				// If database does not have any results.... return and say log in failed.
				if(!$user){
					header ('Location: ' . 'login?loginFailed');
				}
				else{
					// we will check pass credentials.
					if($this->decryptAndComparePasswords($user["hashed_password"], $pass)){
						$this->begin_session($user);
						header('Location: ' . '/index.php');
						// echo "<script>alert('Your passwords Pass.');</script>";
					} else {
						header ('Location: ' . 'login?loginFailed');
					}
				}

			} else {
				header ('Location: ' . 'login?loginFailed');
			}
		}
	}




?>
