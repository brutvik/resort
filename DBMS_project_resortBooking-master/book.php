<?php
	session_start();
	include 'connect.php';
	$cost=$_SESSION["cost"];
	$num= $_POST["num"];
	$amount=$cost*$num;
	echo "YOUR BILL IS: <br>";
	for($i=0;$i<$num;$i++)
	{
		$j=$i+1;
		$res="res".$j;
		
		echo $_POST[$res]."<br>";
	}
	echo $amount;
	
?>