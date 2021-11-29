
<?php
include_once 'dbconect.php';
<html>
<head>
<style>
<table
{ border "style :solid";
border "width :2px";
border "color :PINK";}
</style>
</head>
<body bgcolor="#EEFDEF">
<?php

echo "<table border='1'>

<tr>

<td>studentname</td><td>rollno</td>
<tr>
<td>Usha Sri T</td><td>16it49</td>
 

</tr>";


?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="db";

$conn = new mysqli($servername, $username, $password,$db);

if (!$conn)

  {
  die('Could not connect: ' . mysql_error());

  }


$sub_id=$_POST['sub_id'];
$sub_name=$_POST['sub_name'];
$internal_I=$_POST['internal_I'];
$internal_II=$_POST['internal_II'];
$semester=$_POST['semester'];

$result=mysqli_query($conn,"INSERT into 16it49  values('$sub_id','$sub_name','$internal_I','$internal_II','$semester')");

if($result=$conn->query($db);)
{
	echo "<script type='text/javascript'>alert('record added successfully..!!');</script>";
		echo "<script type='text/javascript'>window.location.href='update.php';</script>";

}



$conn->close();

?>

</body>

</html>
