<?php

include "connection.php";
include "session.php";

$sql = "DELETE FROM todo
		 WHERE `userid`='{$_SESSION["userid"]}'";
							
 if ($conn->query($sql) === TRUE) {
	 //echo "New record created successfully";
	header('Location: dash.php');
 }
	else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}			
		

?>