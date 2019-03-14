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


<?php
	session_start();
	include 'connect.php';
	$url1=$_GET["url"];
	//echo $url1;
	$r_id='';
	//$sql = "SELECT r_name,img_url,type,star_rating,location,cost FROM resort";
	$sql = "SELECT r_name,resort_id,img_url,cost,location,star_rating,type " .
	"FROM resort " . 
	"WHERE img_url = '" . $url1 . "' ";
	$res = mysqli_query($conn,$sql);
	if($res->num_rows >=1)
	{
		while($row = $res->fetch_assoc())
		{
			$resort_name = $row['r_name'];
			$url = $row['img_url'];
			$star = $row['star_rating'];
			$type = $row['type'];
			$loc = $row['location'];
			$cost=$row['cost'];
			$r_id=$row['resort_id'];
			echo "<div class='pics'><img src=".$url.">";
			echo "<div class='details'><center>".$resort_name."<br>";
			echo $star."<i class='glyphicon glyphicon-star'></i> ";
			echo $type."<br>".$loc;
			echo "<br>cost:".$cost;

			echo "</center></div>";
			echo "</a></div>";
			$_SESSION["cost"]=$cost;
			}

	
	}
	
	$sql1 = "SELECT food.item " .
	"FROM serves,food " . 
	"WHERE serves.r_id='" . $r_id . "' and  serves.f_id = food.f_id ";
	
	$res1 = mysqli_query($conn,$sql1);
	if($res1->num_rows >=1)
	{
		while($row1 = $res1->fetch_assoc())
		{
			$item=$row1['item'];
			echo $item;
			echo "<br>";
		}
	}

?>
	<div id="names">
	<form name="f1" action="book.php" method="post">
		NUMBER OF RESIDENTS:<input type="number" name="num" min="1" value="1" id="num" onblur="display();"/><br/>
		NAMES:
	</form>
	</div>
<script>
function display()
			{
				var n=f1.num.value;
				var b=document.getElementById("names");
				//console.log(n);
				
				
				for(var i=1;i<=n;i++)
				{
					var a="res"+i;
					console.log(a);
					var textbox=document.createElement("INPUT");
					var c=document.getElementsByName("f1");
					var para=document.createElement("p");
					textbox.setAttribute("type","text");
					textbox.setAttribute("name",a);
					//document.body.appendChild(textbox);
					para.setAttribute("name","a");
					para.appendChild(textbox);
					c[0].appendChild(para);
				}
					var button=document.createElement("INPUT");
					button.setAttribute("type","submit");
					button.setAttribute("name","b1");
					button.setAttribute("value","book");
					c[0].append(button);
			}
</script>
</body>
