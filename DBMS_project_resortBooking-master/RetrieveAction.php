<?php
	include 'connect.php';

	$user = mysqli_real_escape_string($conn,$_POST['user']);

	$sql = "SELECT ssn,name,email,phone_no,address " .
  "FROM customer " .
  "WHERE name = '" . $user . "' ";

	$res = mysqli_query($conn,$sql);

	if($res->num_rows > 0)
	{
		$row = $res->fetch_assoc();
		
		
		echo "Ssn : ".$row["ssn"]."<br>";
		echo "Name : ".$row["name"]."<br>";
		echo "Email : ".$row["email"]."<br>";
		echo "Phone : ".$row["phone_no"]."<br>";
		echo "Address : ".$row["address"]."<br>";
		
	}
	else
		echo "<center>No such user exists</center>";

	$conn->close();
?>

<html>
<body>
	<br>
	<button id="back" onclick="window.location.href = 'Retrieve.php'">Back</button>
	
</body>
</html>