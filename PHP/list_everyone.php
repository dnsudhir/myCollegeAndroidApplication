<?php 



if($_SERVER['REQUEST_METHOD']=='POST'){



        $who = $_POST['who'];

         
	//Importing Database Script 
	require_once('dbConnect.php');
	
   
   
   
   
   
	
	
	switch($who)
	{
	
	
	
			case "MCA 1 Year":
			//Creating sql query
			$sql = "SELECT first_Name,middle_Name,last_Name,roll_No from tbl_student where who = '$who' order by roll_No";
	
			//getting result 
			$r = mysqli_query($con,$sql);
	
			//creating a blank array 
			$result = array();
	
			//looping through all the records fetched
			while($row = mysqli_fetch_array($r)){
		
		       $name = $row['first_Name']." ".$row['middle_Name']." ".$row['last_Name'];
		           
			//Pushing name and id in the blank array created 
				array_push($result,array(
				
				     "name"=>$name,
					 "rno"=>$row['roll_No']
					 
					
				));
			}
			break;
			case "MCA 2 Year":
			//Creating sql query
			$sql = "SELECT first_Name,middle_Name,last_Name,roll_No from tbl_student where who = '$who' order by roll_No";
	
			//getting result 
			$r = mysqli_query($con,$sql);
	
			//creating a blank array 
			$result = array();
	
			//looping through all the records fetched
			while($row = mysqli_fetch_array($r)){
				
				$name = $row['first_Name']." ".$row['middle_Name']." ".$row['last_Name'];
		
			//Pushing name and id in the blank array created 
				array_push($result,array(
				
				     "name"=>$name,
					 "rno"=>$row['roll_No']
					 
				));
			}
			break;
			case "MCA 3 Year":
			//Creating sql query
			$sql = "SELECT first_Name,middle_Name,last_Name,roll_No from tbl_student where who = '$who' order by roll_No";
	
			//getting result 
			$r = mysqli_query($con,$sql);
	
			//creating a blank array 
			$result = array();
	
			//looping through all the records fetched
			while($row = mysqli_fetch_array($r)){
				
				$name = $row['first_Name']." ".$row['middle_Name']." ".$row['last_Name'];
		
			//Pushing name and id in the blank array created 
				array_push($result,array(
				
				     "name"=>$name,
					 "rno"=>$row['roll_No']
					 
				));
			}
			break;
	}
	
	//Displaying the array in json format 
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
}
	?>