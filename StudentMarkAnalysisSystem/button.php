<html>
<head>
</head>

<body style="font:bold">
<form action="list.php" id="LoginForm" method="post"><br/><br/>
 	 <br><input name="submit" type="submit" value="list"><br>
      </form>
<br>
<input type="button" value="exit">
<?php
session_start();
 include("list.php"); 
 echo "logout successfully";
session_destroy();

?>
</form>
</body>
</html>