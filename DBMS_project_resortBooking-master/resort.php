
<html>
<head>
	<title>Resort</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		img {
			width: 285px;
			height: 200px;
		}
		.pics:hover {
			transform: scale(1.1);
		}
		.pics {
			margin: 5%;
			float: left;
		}
		.details {
			height: 90px;
			background-color: gray;
			color: white;
			font-size: 17px;
			font-family: 'helvetica';
		}
		a:hover {
			text-decoration: none;
		}
	</style>

</head>
<body>
	<div>
		<ul>
			<li class="left"><a href="homepage.html"><i class="glyphicon glyphicon-home"></i> Home</a></li>
			<li class="left"><a style="text-decoration: none;"><strong>Travel Fantasy.com</strong></a></li>
			<li class="right"><a href="login.html"><i class="glyphicon glyphicon-user"></i> Login</a></li>
			<li class="right"><a href="signup.html"><i class="glyphicon glyphicon-pencil"></i> Signup</a></li>
		</ul>
	</div>
</body>


<?php
	include 'connect.php';

	$sql = "SELECT r_name,img_url,type,star_rating,location FROM resort";
	$res = mysqli_query($conn,$sql);
	if($res->num_rows > 1)
	{
		while($row = $res->fetch_assoc())
		{
			$resort_name = $row['r_name'];
			$url = $row['img_url'];
			$star = $row['star_rating'];
			$type = $row['type'];
			$loc = $row['location'];
			echo "<div class='pics'><img src=".$url.">";
			echo "<div class='details'><center>".$resort_name."<br>";
			echo $star."<i class='glyphicon glyphicon-star'></i> ";
			echo $type."<br>".$loc;

			echo "</center></div>";
			echo "</a></div>";
		}
	}
				echo '
				<script>
					var a=document.getElementsByTagName("img");
					var c;
					for(var i=0;i<a.length;i++)
					{
						a[i].addEventListener("click",display);
					console.log(a[i]);
						console.log(i);
					}
					function display(e)
					{
							var b=e.target.getAttribute("src");
							window.location="resort_reaction.php?url="+escape(b);
					}
				</script>';	
?>


</html>