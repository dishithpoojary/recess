<?php

include "connection.php";
include 'session.php';

$message = $_POST["message"];
$time  = date("h:i:sa");

	
	echo $useraddid;
	$sqlpuser = "INSERT INTO chat(chatid,message,userid,communityid,time)
					VALUES(NULL,'{$message}','{$_SESSION["userid"]}','{$_COOKIE["communityid"]}','{$time}')";
	
	if($conn->query($sqlpuser)===TRUE)
	{
		header('Location:communitychat.php');
	}
	else
		echo  $sqluser . "<br>" . $conn->error;
	
?>