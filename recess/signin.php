<?php

include "connection.php";

$username=$_POST['username'];
$password=$_POST['password'];
//print_r($_POST);

if(!$_POST['login'])
{
	//echo "<h3>"."please fill the form"."</h3><script>alert('hayahayah');</script>";
	header('Location: index.php');
}
else{
$query1="SELECT * FROM users WHERE `username`='$username'";

$query_run1= $conn->query($query1);

if($query_run1->num_rows > 0) {
	
    while($query_row1 = $query_run1->fetch_assoc()) {
		
		$dbusername=$query_row1['username'];
		$dbpassword=$query_row1['password'];
		
		if($password==$dbpassword&&$dbusername==$username)
		{
			session_start();
			$_SESSION["username"] = "$dbusername";
			header('Location: dash.php');
		}
			else
					echo '<script type="text/javascript">'; 
					echo 'alert("USERNAME PASSWORD MISMATCH");'; 
					echo 'window.location.href = "index.php";';
					echo '</script>';
	
	
	}
}
else
	echo '<script type="text/javascript">'; 
	echo 'alert("USER NOT FOUND PLEASE CHECK YOUR USERNAME OR REGISTER FIRST");'; 
	echo 'window.location.href = "index.php";';
	echo '</script>';
	
}
?>