<?php
include "connection.php";
include "session.php";

$uid = $_SESSION["userid"];

$query="SELECT * FROM subject WHERE `userid`='uid'";
$query_run = $conn->query($query);
$count = $query_run->num_rows;
echo $count;
if($query_run->num_rows > 0)  {
    echo"ok";
	while($query_row = $query_run->fetch_assoc())
	{	
		echo $query_row['subjects']."<br>";
	}

}

?>