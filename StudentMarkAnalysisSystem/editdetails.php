<?php
session_start();
?>
<!DOCTYPE html PUBLIC ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Enter details</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
table.menu {
	font-size:100%;
	position:absolute;
	visibility:hidden;
	width: 177px;
	background-color: #E5E5E5;
}
-->
</style>
<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>
<SCRIPT LANGUAGE="JavaScript">
function put() 
{
var x, y, z,e,f;
x = document.form['En_no'].value;
e='.jpg';
z='Images/';
document.form['img'].value =  z+x+e;
}
</script>
<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>
<?php 
$sub_no=$_POST["sub_no"];
?>
<html>
<style type = "text/css">
body{background-image :url(bag.jpg);}
</style>
<?php
if(!isset($_SESSION['userid'])&&!isset($_SESSION['password']))
{ ?>
<CENTER>
<H1><font color="red">YOU DONT HAVE ACCESS TO THIS PAGE.........................SORRY</font></H1>
</CENTER>
<?php }
else
{
?>
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







<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
 
  <tr class="gray">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top">
		
<form id="form" name="form" method="post" action= "entersubjects.php" > 
			  		    
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
		 </tr>
		 <?
		 
  echo "<tr>";

  echo "<td> </td>";

  echo "<td> </td>";

  echo "<td></td>";

  echo "<td></td>";
  
  echo "<td></td>";
 
  echo "</tr>";

  
?>
		<?php for($i=1;$i<=$sub_no;$i++){ ?>
		 <tr>
			<td> <input type="text" name="<?php $i ?>"> </td>
			<td> <input type="text" name="sub_name<?php $i ?>"> </td>
		 </tr>


<?php } ?>
</table>

<br/>
<br/>
<br/>
<input type="submit" name="Submit" size="100"value="NEXT">
    
                              
    
                </form>
				    
			
                   </td>
        </tr>
            
            </table>          
    </td></tr>
</table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white"> </td>
  </tr>
</table>
</body>
<?php
}
?>
</html>








