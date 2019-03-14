<html>
<head>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: gray;
		}
		div {
			margin: 5%;
			background-color: black;
			width: 300px;
			height: 200px;
		}
		p {
			color: white;
		}
		h4 {
			color: white;
		}
		#error {
			color: red;
		}
		#pass {
			color: lime;
		}
	</style>
</head>
<body>
	
</body>
</html>

<?php
	include 'connect.php';

	$sql = $_REQUEST["variable"];
	echo "<center><div>"."<h4>Query executed</h4>";
	echo "<p>".$sql."</p>";
	$res = mysqli_query($conn,$sql);
	if(!$res)
	{
		echo "<h5 id='error'>Error</h5></div></center>";
		echo "Error : ".mysqli_error($conn);
	}
	else
		echo "<br><h5 id='pass'>Successful<h5></div></center>";
	$conn->close();
?>






