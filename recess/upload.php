<?php

include "connection.php";
include "session.php";

$upload_image=$_FILES['myimage'][ 'name' ];

$folder="/xampp/htdocs/recess/images/";

move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);

$insert_path=" Update users 
				set `img`='{$upload_image}'
				where `userid`='{$_SESSION["userid"]}'";

				
echo $insert_path;
$query_runimg = $conn->query($insert_path);
echo $upload_image;	
header('Location: dash.php');

?>