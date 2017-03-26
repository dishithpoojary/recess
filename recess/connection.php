<?php
$conn_error='Kuch toh gabdbadh hai';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='recess';


$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
