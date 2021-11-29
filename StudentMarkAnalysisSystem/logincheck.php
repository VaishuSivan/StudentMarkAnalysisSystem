<html>
<head>
</head>
<?php
if(isset($_POST['SignIn']))
{
session_start();
include "datalink.php";

$a=trim($_POST["username"]);
$b=trim($_POST["password"]);
$db="select * from checktb where username='$a' and BINARY password='$b'";
$y=$conn->query($db);

if($y->num_rows==1)
{ 
	$row = $y->fetch_assoc();
	$_SESSION["username"] = $row["username"];
	$_SESSION["password"]=$row["password"];
	
       switch ($a) {
    case '16it49':
        echo "<script type='text/javascript'>window.location.href='update.php';</script>";

    break;
    case '16it50':
	
         echo "<script type='text/javascript'>window.location.href='vaish.php';</script>";
    break;
    case '16it32':
         echo "<script type='text/javascript'>window.location.href='MRAGAVI.php';</script>";
       
	   break;
	case '16it48':
        echo "<script type='text/javascript'>window.location.href='tharini.php';</script>";

    break;
	case '16it63':
        echo "<script type='text/javascript'>window.location.href='aneeka.php';</script>";

		break;
}
       
}
else 
	
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "login.php";
}
$conn->close();
}
else
{
	echo "<script type='text/javascript'>window.top.location.href='unathorised.php';</script>";
}
?> 
<body>
</body>
</html>