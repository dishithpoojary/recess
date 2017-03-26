<?php

include "connection.php";
include 'session.php';

$useraddname = $_POST["useraddname"];


$sqluser = "SELECT * FROM  users 
				where `username` = '{$useraddname}'";
	
	$query_runuser = $conn->query($sqluser);
	
	while($query_rowuser=$query_runuser->fetch_assoc())
	{
		$useraddid=$query_rowuser['userid'];
	}
	
	echo $useraddid;
	$sqlpuser = "INSERT INTO members(memberid,userid,communityid)
					VALUES(NULL,'{$useraddid}','{$_COOKIE["communityid"]}')";
	
	if($conn->query($sqlpuser)===TRUE)
	{
		header('Location:communitychat.php');
	}
	else
		echo  $sqluser . "<br>" . $conn->error;
	
?>