<?php

	
	
	$email = $_GET['email'];
	$key_value = $_GET['key_value'];
	
	
	require_once('dbConnect.php');
	
	$sql = "update tbl_student set status = 'Active' where email = '$email'";
	
	if(mysqli_query($con,$sql))
	{
		
		echo "Your Account is Active Now <br>you can successfully login in to the app with your credentials";
	}
	else
	{
			echo "Verification Failed";
	}
	
























?>