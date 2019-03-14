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
			<li class="right"><a href="login.html"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
			<li class="right"><a href="homepage.html"><i class="glyphicon glyphicon-pencil"></i> Logout</a></li>
		</ul>
	</div>
</body>
</html>


<?php
	include 'connect.php';

	$ssn = $_POST['ssn'];
	$pass = $_POST['pass'];

	$sql = "SELECT * " .
		"FROM customer " .
		"WHERE ssn = '" . $ssn . "' and password = '" . $pass . "' ";


	$admin_query = "SELECT ssn,password " .
	"FROM customer " .
	"WHERE ssn = 'admin' ";

	$admin_details = mysqli_query($conn,$admin_query);
	$admin_row = $admin_details->fetch_assoc();
	if($ssn == 'admin')
	{
		if($pass == $admin_row['password'])
			header('Location: adminlogin.php');
		else
		{
			echo "<br><br></div><center><span style='font-size:20px;color:red;''><i class='glyphicon glyphicon-exclamation-sign'></i> No such account exists</span><br><span style='font-size:20px;''>Verify your security num and password</center>'";
			$conn->close();
			die();
		}
	}

	$res = mysqli_query($conn,$sql);
	if($res->num_rows == 1)
	{
		$row = $res->fetch_assoc();
		echo "<center><br>".$row['ssn']."<br>";
		echo $row['name']."<br>";
		echo $row['email']."<br>";
		echo $row['phone_no']."<br>";
		echo $row['address']."<center>";
	}
	elseif ($res->num_rows != 1) {
		echo "<br><br></div><center><span style='font-size:20px;color:red;''><i class='glyphicon glyphicon-exclamation-sign'></i> No such account exists</span><br><span style='font-size:20px;''>Verify your security num and password</center>'";
	}

	$conn->close();

?>







