<?php
	

	# Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
	
	# Connect to MySQL database
	$MySQL = mysqli_connect("localhost","root","","php") or die('Error connecting to MySQL server.');

	if($_POST['password'])
	die("incorrect password");
	{
		$password=password_hash($_POST["password"], PASSWORD_DEFAULT);
	}

	