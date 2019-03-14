<html>
<head>
	<title>Profile</title>
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
	</div>
</body>

</html>



<?php
	include 'connect.php';

	$pass = addslashes($_POST['pass']);
	$cpass = $_POST['cpass'];
	if($pass != $cpass) 
	{
		header('Location: signup.html');
		exit;
	}
	
	
	$uname = addslashes($_POST['uname']);
	$email = addslashes($_POST['email']);
	$ssn = addslashes($_POST['ssn']);
	$phone = addslashes($_POST['phone']);
	$address = addslashes($_POST['address']);

	$pass = md5($pass);
	$sql = "INSERT INTO customer ". "(ssn, name, email, password, phone_no, address) ". "VALUES ('$ssn','$uname','$email','$pass','$phone','$address')";

	$res = mysqli_query($conn,$sql);
	if(!$res)
	{
		die('<br><br></div><center><span style="font-size:20px;color:red;"><i class="glyphicon glyphicon-exclamation-sign"></i> This account already exists</span><br><span style="font-size:20px;">Try using different security num</center>');
	}
	else
	{
		echo "<center><br><br>
		<i class='glyphicon glyphicon-saved' style='font-size: 20px;color: green'></i>
		<span style='font-size: 20px;''>Signup successful. Login to continue</span></center>";
	}

	$conn->close();
	
?>



	












