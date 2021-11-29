<?php if(isset($_POST['Sign In']))
{
session_start();
include_once 'DBConnection.php';

$username=$_POST['username'];
$password=$_POST['password'];


$res=mysqli_query($conn,"INSERT into users values('$username','$password')");

if($res)
{
	echo "<script type='text/javascript'>alert('signed up successfully..!!');</script>";
	include "login.php";
}




