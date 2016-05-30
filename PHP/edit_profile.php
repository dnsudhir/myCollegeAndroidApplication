<?php

     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          $email= $_POST['email'];



          $sql = "select first_Name,middle_Name,last_Name,roll_No,dob,mobile_No from tbl_student where email = '$email'";

          require_once('dbConnect.php');

          $result = mysqli_query($con,$sql);
          
          $data = array();

         if($result)
         {
           $row = mysqli_fetch_array($result);
           array_push($data,array(
					"fname"=>$row['first_Name'],
					"mname"=>$row['middle_Name'],
					"lname"=>$row['last_Name'],
					"rno"=>$row['roll_No'],
					"mob_no"=>$row['mobile_No'],
                                         "dob"=>$row['dob']
				));

			echo json_encode(array('result'=>$data));
                       
			
			
			mysqli_close($con);




         }
else{echo "Failed";}





     }


?>


