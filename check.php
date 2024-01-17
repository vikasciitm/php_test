<?php 
include"connect.php";

$email=$_POST['email'];
$password=$_POST['password'];


if($email=="")
{
	echo 'please enter email id';
}
elseif($password=="")
{
	echo 'please enter password';
}
else{

	$getcheck=mysqli_query($db,"SELECT * FROM user WHERE email='$email' AND password='$password'");
	$row=mysqli_num_rows($getcheck);
	if($row==1)
	{
		$getuserinfo=mysqli_fetch_array($getcheck);

		$_SESSION['myid']=$getuserinfo['id'];
		$_SESSION['myname']=$getuserinfo['name'];

		header("location:profile.php");

	}
	else{
		echo 'Email id and password incorrect';
	}
}
?>