<?php 
include"connect.php";
if(isset($_SESSION['myid']))
{
	session_destroy();
	header("location:login.php");
}


?>