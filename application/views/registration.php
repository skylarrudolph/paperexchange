<html>
<!DOCTYPE html>
<?php
	$this->load->helper('form');

?>
<body>
	<h1>Workforce Bids Registration</h1>
	<div id="registrationForm">
<!-- 										<?php 
		// if(sizeof($_GET)){
		// 	echo "<div id='error'>* Indicates an error</div>";
		// }
			?> -->
		<form name="register" method="post" action="addUser">
			<table width="35%" border="0" cellspacing="1" cellpadding="3">
				<tr>
					<td>Email:</td>
					<td><?php echo form_input('email')?></td>
					<td>
						<div id='error'>
							<?php if(isset($_GET['emailCheck'])) {
										echo 'That is not a proper email.'; 
									} else if(isset($_GET['emailExists'])){
										echo 'That email is already registered.';
									}
							?>
						</div>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?php echo form_password('password')?></td>
					<td><div id='error'><?php if(isset($_GET['passwordCheck'])) echo "Passwords are incorrect."; ?></div></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><?php echo form_password('confirm_password')?></td>
				</tr>
			</table>
			<input type="submit" value="Register for Workforce Bids">
		</form>
	</div>