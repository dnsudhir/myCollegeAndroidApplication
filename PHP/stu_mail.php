<?php

        
          if($_SERVER['REQUEST_METHOD'] == 'POST')
          {

                       $email= $_POST['email'];
                       $to = $_POST['mail_to'];
                       $subject = $_POST['mail_subject'];
                       $message = $_POST['mail_message'];
 
                       $sql = "select first_Name,middle_Name,last_Name from tbl_student where email = '$email'";
                       
                         require_once('dbConnect.php');
                       $result = mysqli_query($con,$sql);

                       $row = mysqli_fetch_array($result);
                       $name = $row['first_Name']." ".$row['middle_Name']." ".$row['last_Name'];



                      


					
					
	        require_once('phpmailer/PHPMailerAutoload.php');
	
	
	          $mail             = new PHPMailer();
                  $body             = $message;
                  $mail->IsSMTP();
                  $mail->Host       = "smtp.example.com";                  
                  $mail->SMTPAuth   = true;
                  $mail->Host       = "smtp.example.com";
                  $mail->Port       = 587;
                  $mail->Username   = 'example@email.com';
                  $mail->Password   = 'password';
                  $mail->SMTPSecure = 'tls';
                  $mail->SetFrom('example@email.com', "$name<$email>");
                  $mail->AddReplyTo("$to","$name");
                  $mail->Subject    = $subject;
                  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
                  $mail->MsgHTML($body);
                  $address = $to;
                  $mail->AddAddress($address, $name);
                  if(!$mail->Send()) {
                      echo "Mail Sent Failed";
                  } else {
                        echo "Mail Sent Successfully";
                  }

                 
                   mysqli_close($con);

           }

              


?>


















