<?php 
include"connect.php";
if(isset($_SESSION['myid']))
{
	header("loaction:profile.php");
}else
{

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Account</title>
<?php  include"file.php";
?>

	
</head>
<body>
<?php include"menu.php";?>
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<form method="post" action="addacount.php">
			<div class="card">
				<div class="card-header">Create account</div>
				<div class="card-body">
					<label>Enter name</label>
					<input type="text" name="name"></br>
					<label>Enter email</label>
					<input type="email" name="email"></br>
					<label>Enter password</label>
					<input type="password" name="password"></div>
				<div class="card-footer">
				<button class="btn btn-success">Create Account</button>
		
            </div>
			</div>
		</form>
			</div>
		</div>
	</div>
</section>

</body>
</html>
<?php } ?>