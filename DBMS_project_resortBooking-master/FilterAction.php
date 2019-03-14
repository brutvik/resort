<?php 
	include 'connect.php';

	$list = mysqli_real_escape_string($conn,$_POST['list']);
	
	$sql = "SELECT r_name " .
	"FROM resort " . 
	"WHERE star_rating = '" . $list . "' ";

	$res = mysqli_query($conn,$sql);

	if($res->num_rows > 0)
	{
		echo "<ul>";
		while($row = $res->fetch_assoc())
		{
			echo "<li>".$row['r_name']."</li><br>";
		}
		echo "</ul>";
	}
?>

<html>
<body>
	<button onclick="window.location.href='Filter.php'">Back</button>
</body>
</html>