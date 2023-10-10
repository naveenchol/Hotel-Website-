<?php
  require("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
	<div class="login-form">
		<h2>ADMIN LOGIN</h2>
		<form method="POST">
			<div class="input-field">
				<input type="text" placeholder="Admin Name" name="AdminName">
			</div>
			<div class="input-field">
				<input type="password" placeholder="Password" name="AdminPassword">
			</div>	
			<button type="submit" name="Signin">Sign In</button>
		</form>
	</div>
<?php
	if(isset($_POST['Signin']))
	{
	$query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['AdminLoginId']=$_POST['AdminName'];
		header("location: Admin Panel.php");
	}
	else
	{
		echo "<script>alert('Incorrect Password')</script>";
	}
	}
?>
</body>
</html>