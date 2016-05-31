<?php 


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$first_Name = $_POST['fname'];
		$middle_Name = $_POST['mname'];
		$last_Name = $_POST['lname'];
		$email = $_POST['email'];
		$who = $_POST['who'];
		$password = $_POST['password'];
		$roll_No = $_POST['rno'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$mobile_No = $_POST['mno'];
		
		$key_value = md5($password);

		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);

		$encrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key_value, $password, MCRYPT_MODE_CBC, $iv);

		
		
		$check_email = "select email,status from tbl_student where email = '$email'";
		require_once('dbConnect.php');
		
		
		
		//Creating an sql query
		$sql = "INSERT INTO tbl_student (first_Name,middle_Name,last_Name,who,email,password,pass_key,iv,roll_No,dob,gender,mobile_No) VALUES ('$first_Name','$middle_Name','$last_Name','$who','$email','$encrypted','$key_value','$iv','$roll_No','$dob','$gender','$mobile_No')";
		
		//Importing our db connection script
		
		
		//Executing query to database
		if(mysqli_query($con,$sql)){
			
				$to      = $email; // Send email to our user
				$subject = 'Signup | Verification'; // Give the email a subject 
				$message = "
				 
				Thanks for signing up!.<br>
				Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br><br>
				 
				------------------------<br>
				Username: '$email'<br>
				Password: '$password'<br>
				------------------------<br>
				 <br>
				Please click this link to activate your account:<br>
				http://www.userdata.esy.es/verify.php?email=$email&key_value=$key_value.
				 
				"; // Our message above including the link
									 
				

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
                  $mail->SetFrom('example@email.com', 'Admin');
                  $mail->AddReplyTo('example@email.com','Admin');
                  $mail->Subject    = $subject;
                  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
                  $mail->MsgHTML($body);
                  $address = $to;
                  $mail->AddAddress($address, $name);
                  $mail->Send();
                 // echo $mail->ErrorInfo;
                     
                 












			
			
			switch($who)
			{
				case "MCA 1 Year":
				echo 'Student Registration Successful';
				break;
				case "MCA 2 Year":
				echo 'Student Registration Successful';
				break;
				case "MCA 3 Year":
				echo 'Student Registration Successful';
				break;
				case "Faculty":
				echo 'Faculty Registration Successful';
				break;
				
			}
			
		}else{
			$check_result = mysqli_query($con,$check_email);

			if(mysqli_num_rows($check_result)){

           			$check_array = mysqli_fetch_array($check_result);

				if($check_array['status'] == "Active"){
					echo "Active";
				}
				else{
					echo "Verify";
				}
		    	 }
		
			
	       	    }
		
		//Closing the database 
		mysqli_close($con);
	}
	
?>
