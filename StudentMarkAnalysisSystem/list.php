
<html>
	<head>
		
		<h1 align="center" class="style1">STUDENT LIST PAGE</h1>
		

	</head>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="logdb";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$db="SELECT * from checktb"; 
$y=$conn->query($db);
?>
</html>


<?php    
$row = $y->fetch_array();?>
 
		
							
				
<br>
<br>
<br>
<div id="menu">
<a href="link2.php"><center><b><font size="6" face="Times New Roman" color="black">16IT49</b></font></center></a>     
						
					</div>     
<br>
<br>
<br>
<div id="menu" >
<a href="link3.php"><center><b><font size="6" face="Times New Roman" color="black">16IT50</b></font></center></a>     
						
					</div> 
					<br>
<br>
<br>
<div id="menu">

<a href="link.php"><center><b><font size="6" face="Times New Roman" color="black">16IT32</b></font></center></a>     
						
					</div>     
					<br>
<br>
<br>
<div id="menu">
<a href="link5.php"><center><b><font size="6" face="Times New Roman" color="black">16IT63</b></font></center></a>     
						
					</div>     
					<br>
<br>
<br>
<div id="menu">
<a href="link4.php"><center><b><font size="6" face="Times New Roman" color="black">16IT48</b></font></center></a>     
						
					</div>     

					
            </div> 
			<div class="center_content">
				<div class="left_content">
        	







</body>
</html>