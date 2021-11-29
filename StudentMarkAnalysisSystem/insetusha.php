<head>
    <title>Add Data</title>
</head>
 
<body>

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


$db="select * from 16it49 ";
$result=$conn->query($db);

if(isset($_POST['Submit'])) {    
    $sub_id = $_POST['sub_id'];
    $sub_name = $_POST['sub_name'];
    $internal_I = $_POST['internal_I'];
	$internal_II = $_POST['internal_II'];
	$semester = $_POST['semester'];

echo "<table border='1'>

<tr>

<td>sub_id</td>

<td>sub_name</td>

<td>internal_I</td>

<td>internal_II</td>

<td>semester</td>

</tr>";
 
 //insert data to database
$result = mysqli_query($db, "INSERT INTO 16it49(sub_id,sub_name,internal_I,internal_II,semester) VALUES('$sub_id','$sub_name','$internal_I','$internal_II,'$semester'')")        
        //display success message
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


               
       
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='update.php'>View Result</a>";
    }
}
?>
</body>
</html>