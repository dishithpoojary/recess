<?php

include "connection.php";
include "session.php";

$number = count($_POST['item']);
$val = "";

if($number > 0)  
 {  echo"<script>console.log('inserted');</script>";
     if(trim($_POST["item"] != ''))  
           {  	
				$val=$_POST["item"][0];
				$date = $_POST["dateitem"][0];
	   
                $sql = "INSERT INTO todo(todoid,userid,item,date) 
							VALUES(NULL,'{$_SESSION["userid"]}','$val','$date')";
							
                if ($conn->query($sql) === TRUE) {
					//echo "New record created successfully";
						header('Location: dash.php');
				} else {
					//echo "Error: " . $sql . "<br>" . $conn->error;
				}			
			}  
	  
      echo "Data Inserted";  
 }  

 else {
    echo '<script type="text/javascript">'; 
	echo 'alert("mistake");'; 
	echo '</script>';
}


?>