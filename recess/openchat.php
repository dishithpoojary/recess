<?php

include "connection.php";
include 'session.php';

$comname = $_POST["community"];


$sqlchat = "SELECT * FROM  community 
				where `name` = '{$comname}'";
	
	$query_runchat = $conn->query($sqlchat);
	
	while($query_rowchat=$query_runchat->fetch_assoc())
	{
		setcookie("communityid", $query_rowchat['communityid'], time() + (86400 * 30), "/"); 
		setcookie("communityname",$query_rowchat['name'], time() + (86400 * 30), "/"); 

	}
	header('Location:communitychat.php');
	
?>