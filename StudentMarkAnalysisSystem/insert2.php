<?php
include_once 'db.php';

$sub_id=$_POST['i'];
$sub_name=$_POST['n'];
$internal_I=$_POST['i1'];
$internal_II=$_POST['i2'];
$semester=$_POST['s'];


$res=mysqli_query($conn,"INSERT into 16it49 values('$sub_id','$sub_name','$internal_I','$internal_II','$semester')");

if($res)
{
	echo "<script type='text/javascript'>alert('submitted successfully..!!');</script>";
	include "link2.php";
}


