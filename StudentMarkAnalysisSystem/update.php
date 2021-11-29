<html>
<head>
<style>
<table
{ border "style :solid";
border "width :2px";
border "color :PINK";align='center';}
</style>
</head>
<body bgcolor="#EEFDEF">
<?php

echo "<table border='1' align='center'>

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


$db="select * from 16it49 ";
$result=$conn->query($db);



echo "<table border='1' align='center';>

<tr>

<td>sub_id</td>

<td>sub_name</td>

<td>internal_I</td>

<td>internal_II</td>

<td>semester</td>

</tr>";

 
while($row = $result->fetch_array())
{
   echo "<tr>";

  echo "<td> $row[sub_id]</td>";

  echo "<td> $row[sub_name]</td>";

  echo "<td>$row[internal_I]</td>";

  echo "<td>$row[internal_II]</td>";
  
  echo "<td>$row[semester]</td>";
 
  echo "</tr>";

  
}
echo "</table>";

 

$conn->close();

?>

</body>

</html>