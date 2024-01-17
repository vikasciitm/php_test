<?php 
include"connect.php";

if(isset($_SESSION['myid']))
{


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>setting</title>
</head>
<body>
	<a href="setting.php">setting</a>
</body>
</html>
<?php }  else{
	header("location:login.php");
}

	?> 
