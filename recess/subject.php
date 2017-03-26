<?php

include "connection.php";
include "session.php";

$number = count($_POST['sub']);
$val = "";

if($number > 0)  
 {  echo"<script>console.log('inserted');</script>";
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["sub"][$i] != ''))  
           {  	$val=$_POST["sub"][$i];
	   
                $sql = "INSERT INTO subject(subjectid,userid,subjects) 
							VALUES(NULL,'{$_SESSION["userid"]}','$val')";
							
                if ($conn->query($sql) === TRUE) {
					//echo "New record created successfully";
						header('Location: dash.php');
				} else {
					//echo "Error: " . $sql . "<br>" . $conn->error;
				}			
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