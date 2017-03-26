<?php

include "connection.php";

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
//$passwordhash=md5($password);


if(!$_POST['Submit'])
{
	echo "<h3>"."please fill the form"."</h3>";
	header('Location: index.php');
}
else{
	
	
$query1="INSERT INTO users(userid,name,email,username,password,dob,gender)
			VALUES(NULL,'$name','$email','$username','$password','$dob','$gender')";

			
if ($conn->query($query1) === TRUE) {
	session_start();
	$_SESSION["username"] = "$username";
	header('Location: dashstart.php');
	
			
}

 else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
}

}
?>