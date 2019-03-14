<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project1";

	$conn = mysqli_connect($server,$username,$password,$dbname);

	if(!$conn)
		die("Failed : ".$conn->connect_error);

?>
