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
	<title>Login</title>
<?php  include"file.php";?>

	
</head>
<body>
<?php include"menu.php";?>
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<form method="post" action="check.php">
			<div class="card">
				<div class="card-header">login</div>
				<div class="card-body">
					<label>Enter email</label>
					<input type="text" name="email"></br>
					<label>Enter password</label>
					<input type="text" name="password"></div>
				<div class="card-footer">
				<button class="btn btn-success">Login</button>
		
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