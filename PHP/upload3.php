<?php
  
       if($_SERVER['REQUEST_METHOD'] == 'POST')
       {

                

           
                 
                 
                 
                  $file_path = "MCA_3_Year/";
                  $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
         
             if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) )
             {
    
               echo "Success";

            }
            else
            {
               echo "Fail";

            }


     }


 ?>