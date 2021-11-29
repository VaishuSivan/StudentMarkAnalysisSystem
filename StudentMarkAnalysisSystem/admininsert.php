<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
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
 
if(isset($_POST['Submit'])) {    
    $sub_id = $_POST['sub_id'];
    $sub_name = $_POST['sub_name'];
    $internal_I = $_POST['internal_I'];
	$internal_II = $_POST['internal_II'];
	$semester = $_POST['semester'];

        
    // checking empty fields
    if(empty($sub_id) || empty($sub_name) || empty($internal_I) || empty($internal_II) || empty($semester)) {                
        if(empty($sub_id)) {
            echo "<font color='red'>Sub_id field is empty.</font><br/>";
        }
        
        if(empty($sub_name)) {
            echo "<font color='red'>sub_name field is empty.</font><br/>";
        }
        
        if(empty($internal_I)) {
            echo "<font color='red'>internal_I field is empty.</font><br/>";
        }
		if(empty($internal_II)) {
            echo "<font color='red'>internal_II field is empty.</font><br/>";
        }
		if(empty($semester)) {
            echo "<font color='red'>semester field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
		$result=mysql_query($db, $conn);

	
       
         $result = mysqli_query($mysqli, "INSERT INTO 16it49(sub_id,sub_name,internal_I,internal_II,semester) VALUES('$sub_id','$sub_name','$internal_I','$internal_II,'$semester'')");

}
       
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    }
}
?>
</body>
</html>
