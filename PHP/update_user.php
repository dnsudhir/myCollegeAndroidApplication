<?php

      if($_SERVER['REQUEST_METHOD'] == 'POST')
       {
             $email = $_POST['email'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $rno = $_POST['rno'];
            $mno = $_POST['mno'];
            $dob = $_POST['dob'];
 
              

            $sql = "update tbl_student set first_Name='$fname', middle_Name = '$mname', last_Name='$lname', roll_No='$rno', mobile_No='$mno', dob='$dob' where email = '$email'";
            
             require_once('dbConnect.php');
               
            $result = mysqli_query($con,$sql);
          
           if($result)
           {
                echo "Updated Successfully";
           }
           else
           {
                echo "Update Failed";
           }


            mysqli_close($con);



       }















?>