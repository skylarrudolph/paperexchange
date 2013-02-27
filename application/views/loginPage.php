<html>
<!DOCTYPE html>
<?php
	$this->load->helper('form');

?>
<body>
	<h1>Workforce Bids Log In</h1>
	<div id="loginForm">
		<form name="login" method="post" action="loginUser">
			<table width="35%" border="0" cellspacing="1" cellpadding="3">
				<tr>
					<td>Email:</td>
					<td><?php echo form_input('email')?></td>
					<td>
						<div id='error'>
							<?php if(isset($_GET['loginFailed'])) {
										echo 'Username or password is incorrect.'; 
									} 
							?>
						</div>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?php echo form_password('password')?></td>
				</tr>
			</table>
			<input type="submit" value="Log in to Workforce Bids!">
		</form>
	</div>