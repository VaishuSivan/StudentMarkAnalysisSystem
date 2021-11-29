<?php
session_start();
?>
<!DOCTYPE html PUBLIC ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Enter details</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<link href="../fonts.css" rel="stylesheet" type="text/css" />
<?php 
$sub_id=$_POST["sub_id"];
?>
<?php
if(!isset($_SESSION['userid'])&&!isset($_SESSION['password']))
{ ?>
<CENTER>
<H1><font color="red">YOU DONT HAVE ACCESS TO THIS PAGE.........................SORRY</font></H1>
</CENTER>
<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
 
  <tr class="gray">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top">
		
<form id="form" name="form" method="post" action= "update.php" > 
			  		    
       <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
            <tr>
              <td bgcolor="purple"><p class="text_black_huge"><font size="5" font color="white">Enter The Details</font> </p>
                </td>
            </tr>
           
            <tr>
              
                <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
                 
                        <tr>
                          <td height="355"><table width="50%" border="border" cellspacing="2" cellpadding="2">
<tr><br>
			<td> sub_id </td>
			<td> sub_name</td>
			<td> internal_I</td>
			<td> internal_II</td>
			<td> semester</td>
		</br> </tr>
		
$a=trim($_POST["username"]);
$b=trim($_POST["password"]);
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="admindb";

$conn = new mysqli($servername, $username, $password,$db);

if (!$conn)

  {
  die('Could not connect: ' . mysql_error());

  }
 
$res=$conn->query($db);
$sub_id=$_POST['a'];
$sub_name=$_POST['p'];
$internal_I=$_POST['p'];
$internal_II=$_POST['p'];
$semester=$_POST['p'];


$res=mysqli_query($conn,"INSERT into insertus values('$sub_id','$sub_name','$internal_I','$internal_II','$semester')");
while($row = $res->insert_array())
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