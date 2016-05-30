<?php 

  if($_SERVER['REQUEST_METHOD']=='POST'){


			$table= $_POST['table'];
			$rno= $_POST['rno'];
			
			require_once('dbConnect.php');
			
			$sql = "SELECT email FROM tbl_student WHERE roll_No ='$rno'";
			$q1 = mysqli_query($con,$sql);
			$qr1 = mysqli_fetch_array($q1);
			$email = $qr1['email'];
			

                        switch($table)
                        {
                              case "intnl_marks_i";
                              $sql1 = "SELECT * from intnl_marks_i where email = '$email'";
                              break;
                              case "intnl_marks_ii";
                              $sql1 = "SELECT * from intnl_marks_ii where email = '$email'";
                              break;
                              case "attend_i";
                              $sql1 = "SELECT * from attend_i where email = '$email'";
                              break;
                              case "attend_ii";
                              $sql1 = "SELECT * from attend_ii where email = '$email'";
                              break;



                        }
			$q2 = mysqli_query($con,$sql1);
			
			$result = array();
			
			$row = mysqli_fetch_array($q2);
			array_push($result,array(
					"sub1"=>$row['sub1'],
					"sub2"=>$row['sub2'],
					"sub3"=>$row['sub3'],
					"sub4"=>$row['sub4'],
					"sub5"=>$row['sub5']
				));

			echo json_encode(array('result'=>$result));
			
			
			mysqli_close($con);
  }
?>


