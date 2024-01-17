<?php 

	session_start();
$db=mysqli_connect("localhost","root","","ram");

if(mysqli_connect_errno()){
	echo "no db".mysqli_errno();
	exit();
}
?>