
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
		<title>RESULT ANALYSIS SYSTEM </title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />

	</head>
<?php 
$conn = mysql_connect("localhost","root", "");
mysql_select_db('logdb',$conn);
$sqlname="CREATE TABLE news(new longtext)";
$resultname=mysql_query($sqlname, $conn);
$conn = mysql_connect("localhost","root", "");
mysql_select_db('logdb',$conn);
$sqlqa="SELECT * from checktb"; 
$resultqa=mysql_query($sqlqa, $conn);
?>
</html>

<style type = "text/css">
body{background-image :url(bag.jpg);}
</style>
<body>
<center>
<table>
<tr>
<th>
 
<img src="m.jpg" height="100" width="100" alt="logo"  />

</th> 

<TH>

<img src="resultan.jpg" height="90" width="700" alt="logo"  />
</TH>
</center>
</table>
<hr />
<hr/>

<?php    
 $row = mysql_fetch_array($resultqa, MYSQL_ASSOC) ?>
		
			<?php $nn= $row['new'];  ?>
                                                        

<blink><marquee><h1><font color="purple"><?php echo"$nn";?></font></h1></marquee></blink>					
				
<br>
<br>
<br>
<div id="menu">
<a href="update.php"><center><b><font size="6" face="Times New Roman" color="black">16IT49</b></font></center></a>     
						
					</div>     
<br>
<br>
<br>
<div id="menu" >
<a href="vaish.php"><center><b><font size="6" face="Times New Roman" color="black">16IT50</b></font></center></a>     
						
					</div> 
					<br>
<br>
<br>
<div id="menu">
<a href="MRAGAVI.php"><center><b><font size="6" face="Times New Roman" color="black">16IT32</b></font></center></a>     
						
					</div>     
					<br>
<br>
<br>
<div id="menu">
<a href="aneeka.php"><center><b><font size="6" face="Times New Roman" color="black">16IT63</b></font></center></a>     
						
					</div>     
					<br>
<br>
<br>
<div id="menu">
<a href="tharini.php"><center><b><font size="6" face="Times New Roman" color="black">16IT48</b></font></center></a>     
						
					</div>     

					
            </div> 
			<div class="center_content">
				<div class="left_content">
        	







</body>
</html>