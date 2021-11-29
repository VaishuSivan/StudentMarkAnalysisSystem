<html>
<head>
</head>
<?php
if(isset($_POST['SignIn']))
{
session_start();
include "welcome line.php";

$a=trim($_POST["16it50"]);
$b=trim($_POST["28/01/1998"]);
$x="select * from admintb where username='$a' and BINARY password='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
	$row = $y->fetch_assoc();
	$_SESSION["username"] = $row["username"];
	$_SESSION["password"]=$row["password"];
		
	
	echo "<script type='text/javascript'>window.location.href='update.php';</script>";
}
	else
	echo "<script type='text/javascript'>window.top.location.href='unathorised.php';</script>";
$conn->close();
?> 
<body>
</body>
</html>