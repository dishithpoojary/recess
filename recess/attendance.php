<?php

include "connection.php";
include "session.php";

$number = count($_POST['att']);
$val = "";

if($number > 0)  
 {  echo"<script>console.log('inserted');</script>";
      for($i=0; $i<$number; $i++)  
      {  
				$val=$_POST["att"][$i];
	   
                $sql = "UPDATE subject
							SET attendance = attendance + 1 
							WHERE `subjects` = '$val' ";
							
                if ($conn->query($sql) === TRUE) {
					
						header('Location: dash.php');
				} else {
					
				}			
	
	  }
        
 }  

 else {
    echo '<script type="text/javascript">'; 
	echo 'alert("mistake");'; 
	echo '</script>';
}


?>