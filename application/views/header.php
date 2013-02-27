<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OddJobs, Come here to find work!</title>
</head>

<style>
	@import url('/assets/css/oddjobs.css');
	@import url('/assets/css/menu_style.css');
</style>
	<img src="/images/workbids.png";
	<div id="cssHeader">
		<!-- <div id="links"> -->
			<?php session_start(); ?>
			<?php if(!isset($_SESSION['loggedInUser'])) { ?>
				<div id='cssmenu'>
					<ul>
   						<li><a href='/index.php/login'><span>Log In to WorkBids</span></a></li>
   						<li><a href='/index.php/registerUser'><span>Register</span></a></li>
					</ul>
				</div>
				<!-- <p>What are you waiting for? <a href="/index.php/login">Log In to WorkBids</a> or <a href="/index.php/registerUser">Register</a></p>  -->
			<?php } else { ?>
				<div id='cssmenu'>
					<ul>
   						<li class='active '><a href='#'><span>Home</span></a></li>
   						<li class='has-sub '><a href='#'><span>Post a Job</span></a>
    	    				<ul>
         						<li><a href='#'><span>Today</span></a></li>
      	   						<li><a href='#'><span>This Week</span></a></li>
      						</ul>
   						</li>
   						<li><a href='#'><span>Find a Job</span></a></li>
   						<li><a href='#'><span>Contact</span></a></li>
   						<li><a href="/index.php/logout">Log out</a></li>
					</ul>
				</div>
			<?php } ?>
		</div>

<div id="container">
<body>

		<!-- </div> -->