<?php
include_once 'db.php';

$sub_id=$_POST['i'];
$sub_name=$_POST['n'];
$internal_I=$_POST['i1'];
$internal_II=$_POST['i2'];
$semester=$_POST['s'];
if(isset($_POST["exambutton"]))
	{
for($i=0;$i<$_POST["tst"];$i++)
{
	 mysql_query("DELETE FROM examination WHERE subid = '$subid[$j]'");
	for($j=0;$j<$_POST['tsubb'];$j++)
	{
	 $sql="INSERT INTO examination (studid,subid,courseid,internaltype,maxmarks,scored,percentage,result)
VALUES
('$studid[$i]','$subid[$j]','$_POST[ttcourse]','$_POST[tintt]','$_POST[tmarks]','$submark[$j]','$resul[$j]','$comment[$j]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


	}
	 
}
	}


$res=mysqli_query($conn,"INSERT into 16it63 values('$sub_id','$sub_name','$internal_I','$internal_II','$semester')");
if(isset($_POST["button"]))
	{
for($i=0;$i<$_POST["tst"];$i++)
{
	for($j=0;$j<$_POST['tsubb'];$j++)
	{
mysql_query("UPDATE examination SET scored='$submark[$j]',percentage ='$resul[$j]', result='$comment[$j]' WHERE examid ='$_POST[examid]' AND subid='$subid[$j]' AND studid='$studid[$i]'");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


	}

if($res)
{
	echo "<script type='text/javascript'>alert('submitted successfully..!!');</script>";
	include "link5.php";
}


