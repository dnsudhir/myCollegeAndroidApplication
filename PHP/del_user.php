<?php

      if($_SERVER['REQUEST_METHOD']=='POST')
      {

                $email = $_POST['email'];

                $sql = "delete from tbl_student where email = '$email'";
                require_once('dbConnect.php');


                 $result = mysqli_query($con,$sql);

                if($result)
                {
                      echo "Account Deleted Successfully";
                }
                else
                {
                      echo "Account Delete Failed, Please Try Again";
                }



      }






?>