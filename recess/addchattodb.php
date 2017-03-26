<?php

include "connection.php";
include 'session.php';

$name=$_POST['name'];

if(!$_POST['submit'])
{
	echo "<h3>"."please fill the form"."</h3>";
	header('Location: community.php');
}
else{
	
	
$query1="INSERT INTO community(communityid,name,adminid,membercount)
			VALUES(NULL,'{$name}','{$_SESSION["userid"]}','1')";
			


	if ($conn->query($query1) === TRUE) {
		
				$sqltp = "SELECT communityid from community
				WHERE `adminid`='{$_SESSION["userid"]}'";
	
		$query_runtp=$conn->query($sqltp);								
		
		while($query_rowtp=$query_runtp->fetch_assoc())
		{
			$querytp="INSERT INTO members(memberid,userid,communityid)
						VALUES(NULL,'{$_SESSION["userid"]}','{$query_rowtp["communityid"]}')";
						if ($conn->query($querytp) === TRUE)
						{
							header('Location: community.php');
						}
		
		}

			
		}	
	
	
	

}
?>