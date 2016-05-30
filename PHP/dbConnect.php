<?php
	/*
		author: Sudheer Doguparthi 
	*/
	
	//Defining Constants
	define('HOST','localhost');
	define('USER','username');
	define('PASS','password');
	define('DB','database_name');
	
	//Connecting to Database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
?>