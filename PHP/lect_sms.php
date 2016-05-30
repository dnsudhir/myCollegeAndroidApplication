<?php

      if($_SERVER['REQUEST_METHOD'] == 'POST')
       {
              $email = $_POST['eamil'];
              $who = $_POST['who'];
              $message = $_POST['lect_sms_msg'];


                require_once('dbConnect.php');
                 $msql = "select first_Name,middle_Name,last_Name from tbl_student where email = '$email'";
                 $mresult = mysqli_query($con,$msql);
                 $mrow = mysqli_fetch_array($result);
                 $name = $row['first_Name']." ".$row['middle_Name']." ".$row['last_Name'];
             
          
                 $sql = "select mobile_No from tbl_student where who = '$who'";
                 $result = mysqli_query($con,$sql);
                 while($row = mysqli_fetch_arrqay($result))
                 {
   
                       $recepient = $row['mobile_No'];
                       $recepient .= "," ;





                 }



		 include('way2sms-api.php');
	
	
          $check= sendWay2SMS ( 'way2sms_Mobile Number', 'way2sms_password', $recepient, $message." By $name");   
		  
          
           
		//Executing query to database
		if($check){
		  
			 echo $check;
		}
                 
             

                 
    
              
                 



















       }









?>