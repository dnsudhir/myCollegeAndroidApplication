<?php

   
	
	
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$uid = $_POST['sms_uid'];
		$upass = $_POST['sms_upass'];
		$number = $_POST['sms_number'];
		$message = $_POST['sms_message'];
		
		
		
		 include('way2sms-api.php');
	
	
          $result = sendWay2SMS ( $uid , $upass , $number , $message);   
		  
          
           
		//Executing query to database
		if($result){
		  
			 echo $result;
		}
                
		
		
		 
		
		
	}
	
	
	
	
?>



