<?php

include "connection.php";
include "session.php";

$number = count($_POST["ass"]);
$val = "";

$uid = $_SESSION["userid"];
$query="SELECT * FROM subject WHERE `userid`='$uid'";

$query_run = $conn->query($query);

while($query_row=$query_run->fetch_assoc())
{
	$id = $query_row['subjectid'];
	echo $id."<br>";
}

if($number > 0)  
 {  echo"<script>console.log('inserted');</script>";
      for($i=0; $i<$number; $i++)  
      {  
			
				$test = $id-$number+$i+1;
				
				if(trim($_POST["ass"][$i] != ''))
				
				{
					$val=$_POST["ass"][$i];
					$date= $_POST["dateass"][$i];
					echo $val."<br>".$date."<br>";
					$sql = "UPDATE subject
								SET `assignments` = '$val'
								WHERE `userid` = '{$_SESSION["userid"]}' and `subjectid`='$test'";
								
					$sql1 = "UPDATE subject
								SET `date` = '$date'
								WHERE `userid` = '{$_SESSION["userid"]}' and `subjectid`='$test'";
					
					if ($conn->query($sql) === TRUE &&$conn->query($sql1)===TRUE ) {
						
							header('Location: dash.php');
					} else {
						 echo "Error: " . $query . "<br>" . $conn->error;
					}			
				
				}
	  }
        
 }  

 else {
    echo '<script type="text/javascript">'; 
	echo 'alert("mistake");'; 
	echo '</script>';
}


?>