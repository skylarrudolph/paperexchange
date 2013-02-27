<?php 
      session_start();
      if(!isset($_SESSION['loggedInUser'])) { ?>
				<div id='cssmenu'>
					<ul>
   						<li><a href='/index.php/login'><span>Log In</span></a></li>
   						<li><a href='/index.php/registerUser'><span>Register</span></a></li>
					</ul>
				</div>
				<!-- <p>What are you waiting for? <a href="/index.php/login">Log In to WorkBids</a> or <a href="/index.php/registerUser">Register</a></p>  -->
			<?php } else { ?>
				<div id='cssmenu'>
					<ul>
   						<li class='active '><a href='/'><span>Home</span></a></li>
   						<li><a href='#'><span>Post a Job</span></a>
   						<li><a href='#'><span>Find a Job</span></a></li>
                     <li><a href='/index.php/accountInfo'><span>My Account</span></a></li>
   						<li><a href="/index.php/logout">Log out</a></li>
					</ul>
				</div>
<?php session_write_close();} ?>