<?php

include "connection.php";

session_start();

$uname=$_SESSION["username"];
$query="SELECT * FROM users WHERE `username`= '$uname'";
$query_run = $conn->query($query);

if($query_run->num_rows>0)
{
	while($query_row = $query_run->fetch_assoc())
	{	
		$_SESSION["name"] = $query_row['name'];
		$_SESSION["userid"] = $query_row['userid'];
		$_SESSION["email"] = $query_row['email'];
		$_SESSION["gender"] = $query_row['gender'];
		$_SESSION["dob"] = $query_row['dob'];
		$_SESSION["img"] = $query_row['img'];
		
	}
}
else
{
	echo"no user";
}	

?>