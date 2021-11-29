<html>
<body>
<?php
$servername = "localhost";
$username="root";
$password="";
$database="db";
$mysqli = new mysqli($servername, $username, $password, $database); mysql_select_db($database) or die( "Unable to select database");
$query2="SELECT * FROM studtb";
$result=$mysqli->query($query2);
$num=$mysqli->mysqli_num_rows($result);?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>
<font face="Arial, Helvetica, sans-serif">sub_id</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">sub_name</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">internal_I</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">internal_II</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">semester</font>
</td>
</tr>
<?php
$i=0;
while ($i < $num) {
$f1=mysql_result($result,$i,"sub_id");
$f2=mysql_result($result,$i,"sub_name");
$f3=mysql_result($result,$i,"internal_I");
$f4=mysql_result($result,$i,"internal_II");
$f5=mysql_result($result,$i,"semester");?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
</td>
</tr>
<?php
$i++;
}?>
</body>
</html>