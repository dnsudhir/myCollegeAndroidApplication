<?php

   
	
	
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$number = $_POST['sms_number'];
		$message = $_POST['sms_message'];
		
		
		
		 include('way2sms-api.php');
		 
		 
		 switch($number){
			 
			 case "MCA 1 Year":
			 
			 $sql = "select mobile_No from tbl_student where who = '$number'";
			 require_once('dbConnect.php');
			 $r = mysqli_query($con,$sql);
			 while($row = mysqli_fetch_array($r))
			 {
				$to = $row['mobile_No'];
				sendWay2SMS ( '8099269432' , '441419' , $to , $message); 
			 }
			 
			 
			 
			 break;
			 
			 case "MCA 2 Year":
			 $sql = "select mobile_No from tbl_student where who = '$number'";
			 require_once('dbConnect.php');
			 $r = mysqli_query($con,$sql);
			 while($row = mysqli_fetch_array($r))
			 {
				$to = $row['mobile_No'];
				sendWay2SMS ( '8099269432' , '441419' , $to , $message); 
			 }
			 
			 break;
			 
			 case "MCA 3 Year":
			 $sql = "select mobile_No from tbl_student where who = '$number'";
			 require_once('../dbConnect.php');
			 $r = mysqli_query($con,$sql);
			 while($row = mysqli_fetch_array($r))
			 {
				$to = $row['mobile_No'];
				sendWay2SMS ( '8099269432' , '441419' , $to , $message); 
			 }
			 
			 break;
			 
			 default:
			 $sql = "select mobile_No from tbl_student where who = '$number'";
			 require_once('../dbConnect.php');
			 $r = mysqli_query($con,$sql);
			 while($row = mysqli_fetch_array($r))
			 {
				$to = $row['mobile_No'];
				sendWay2SMS ( '8099269432' , '441419' , $to , $message); 
			 }
			 
			 break;
			 
			 
			 
		 }

			 echo 'Message Sent Successfull';
			 
			 mysqli_close($con);
		
		
		
		  
		  
		
		  
		
		
	}
	
	
	
	
?>

