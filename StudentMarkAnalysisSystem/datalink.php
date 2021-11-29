<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="logdb";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) 
{
	echo "<script type='text/javascript'>alert('Connection Error. Please Contact Admin');window.location.href = 'login.php';</script>";
}
?>
