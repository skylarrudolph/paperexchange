<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OddJobs, Come here to find work!</title>
</head>

<style>
	@import url('/assets/css/oddjobs.css');
</style>

<div id="container">
<body>
		<div id="links">
			<?php session_start(); ?>
			<?php if(!isset($_SESSION['loggedInUser'])) { ?>
				<p>What are you waiting for? <a href="/index.php/login">Log In to WorkBids</a> or <a href="/index.php/registerUser">Register</a></p> 
			<?php } else { ?>
				<p><a href="/index.php/logout">Log out</a></p>
			<?php } ?>
		</div>