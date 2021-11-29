<html>
<head>
</head>
<?php
if(isset($_POST['SignIn']))
{
session_start();
include "conection.php";

$a=trim($_POST["Username"]);
$b=trim($_POST["Password"]);
$u="select * from admintb where Username='$a' and BINARY Password='$b'";
$v=$conn->query($u);
if($v->num_rows==1)
{
	$row = $v->fetch_assoc();
	$_SESSION["Username"] = $row["Username"];
	$_SESSION["Password"]=$row["Password"];
		
	
	echo "<script type='text/javascript'>window.location.href='list.php';</script>";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "login.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unathorised.php';</script>";
?> 
<body>
</body>
</html>
