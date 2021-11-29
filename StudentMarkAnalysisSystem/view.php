<?php
//including the database connection file
include_once("dbconect.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="admininsert.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>sub_id</td>
            <td>sub_name</td>
            <td>internal_I</td>
            <td>internal_II</td>
			<td>semester</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['sub_id']."</td>";
            echo "<td>".$res['sub_name']."</td>";
            echo "<td>".$res['internal_I']."</td>";
            echo "<td>".$res['internal_II']."</td>";			
            echo "<td>".$res['semester']."</td>";
                }
        ?>
    </table>
</body>
</html>
