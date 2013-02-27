<!DOCTYPE html>

<body>
			<div id='topHeader'>
			<h1>Welcome to Workforce Bids<?php if(isset($_SESSION['loggedInUser'])){echo ',' . ' ' . $_SESSION['loggedInUser']['user_email'];}?>!</h1>
		</div>
	<div id="body">
		<?php
			$this->load->view('AccountView/userRatingsView');
			$this->load->view('AccountView/userAccountView');
			$this->load->view('AccountView/userContactInfoView');
			$this->load->view('AccountView/userBillingView');
		?>
	</div>
