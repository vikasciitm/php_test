<?php 
include"connect.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if($name=="")
{
	echo 'please enter name';
}
elseif($email=="")
{
	echo 'please enter email id';
}
elseif($password=="")
{

	echo 'please enter password';
}
else{
	$insert=mysqli_query($db,"INSERT INTO user SET name='$name',email='$email',password='$password'");

if($insert){
	$check=mysqli_query($db,"SELECT * FROM user WHERE email='$email'");
	 $checkrow=mysqli_num_rows($check);
if($checkrow==1)
{
	$getuserinfo=mysqli_fetch_array($check);

	$_SESSION['myid']=$getuserinfo['id'];
	$_SESSION['myname']=$getuserinfo['name'];

	header("location:profile.php");
}
	
}
else{
	echo 'data not insert';
}
}

?>