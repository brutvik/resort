<?php

	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	if($pass == NULL and $pass != $cpass)
	{
		header('Location: forgot.html');
		exit;
	}

	include 'connect.php';

	$email = ($_POST['email']);
	$ssn = ($_POST['ssn']);


	$update_sql = "UPDATE customer SET password = '" . $pass . "' " .
	"WHERE ssn = '" . $ssn . "' and email = '" . $email . "' ";

	$res = mysqli_query($conn,$update_sql);
	
	$conn->close();

?>


<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<ul>
			<li class="left"><a href="homepage.html"><i class="glyphicon glyphicon-home"></i> Home</a></li>
			<li class="left"><a href="#resorts"><i class="glyphicon glyphicon-glass"></i> Resorts</a></li>
			<li class="left"><a style="text-decoration: none;"><strong>Travel Fantasy.com</strong></a></li>
			<li class="right"><a href="login.html"><i class="glyphicon glyphicon-user"></i> Login</a></li>
			<li class="right"><a href="signup.html"><i class="glyphicon glyphicon-pencil"></i> Signup</a></li>
		</ul>
	</div><br><br>

	<center>
		<span style="font-size: 20px;color: green;"><i class="glyphicon glyphicon-saved"></i></span> <span style="font-size: 20px;">Password changed successfully</span>
	</center>
</body>

</html>











