<html>
<!DOCTYPE html>
<?php
	$this->load->helper('form');
?>
<body>
	<h1>WorkBids Registration</h1>
	<div id="registrationForm">
										<?php 
		if(sizeof($_GET)){
			echo "<div id='error'>* Indicates an error</div>";
		}
			?>
		<form name="register" method="post" action="addUser">
			<table width="30%" border="0" cellspacing="1" cellpadding="3">
				<tr>
					<td>Email:</td>
					<td><?php echo form_input('email')?></td>
					<td><div id='error'><?php if(isset($_GET['emailCheck'])) echo '*' ?></div></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?php echo form_password('password')?></td>
					<td><div id='error'><?php if(isset($_GET['passwordCheck'])) echo "*" ?></div></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><?php echo form_password('confirm_password')?></td>
				</tr>
			</table>
			<input type="submit" value="Register for WorkBids">
		</form>
	</div>