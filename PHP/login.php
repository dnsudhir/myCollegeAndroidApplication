<?php 


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$lusername = $_POST['email'];
		$lpassword = $_POST['password'];
		
		$key_value = md5($lpassword);
		
		
		
		
		//Creating an sql query
		$sql = "select who,status from tbl_student where email = '$lusername' and pass_key = '$key_value'";
		
		//Importing our db connection script
		require_once('dbConnect.php');
		
		$result = mysqli_query($con,$sql);
		
		//Executing query to database
		if($result){
		  if(mysqli_num_rows($result) > 0)
		    {
                               
				$row = mysqli_fetch_array($result);
                                if($row['status'] == "Active"){
				echo $row['who'];
                               }
                               else
                               {
                                 echo "Verify Email To Login";
                               }
		    }
		
		  else
		  {
			echo 'Login Failed';
		  }
		}
		//Closing the database 
		mysqli_close($con);
	}
	
?>

