<?php   
include 'connection.php';
if (isset($_POST['done'])) {
	$roomtype=$_POST["room_type"];
	$roomnumber=$_POST["room_number"];
	$price=$_POST["unit_price"];
	$customertype=$_POST["customer_type"];
	$number=$_POST["c_number"];

	$sql=" SELECT * FROM avail";
	$query=mysqli_query($connection,$sql);
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>AVAILABLE ROOMS</title>
</head>
<div class="top">
	<center>
		<img src="images/logo.png"></center>
	</div>
<body>
<style>
	body{
		background: black;
		color: white;
	}
	.top{
		background: black;
	}
	.nav{
		color:white;
		background: black;
		text-align: center;
	}
	ul{
		text-align: center;
		list-style:none;
		margin-left: 420px;
	}
	ul li{
		float: left;
		text-align: center;
		padding: 22px;
	}
	a{
		color: white;
	}
	button{
		color: white;
		background: gold;
		height: 40px;
		border: 1px solid white;
		font-weight: bold;
		font-size: 17px;
		color:white;

	}
	.room{
		text-align: center;
	}
	table{
		width: 100%;
		color: black;
		background: gold;
		font-size: 22px;
	}


</style>
<div class="nav">
   <center>
   	<ul>
   		<a href="home.php"><li>HOME</li></a>
   		<a href="issues.php"><li>ISSUES</li></a>
   		<a href="rooms.php" ><LI>ROOMS</LI></a>
   		<a href="home.php"><LI>WORKERS</LI></a>
   	</ul>
   	</center>
   </div><br><br><br><br><br><br>
   <div class="room">
<a href="available.php"><button>available rooms</button></a>
<a href="room.php"><button>booked rooms</button></a>
</div><br><br>
<div>
	<center>
		<a href="avi.php"><button>ADD</button><br><br></a>
	</center>
</div>
<table border="1">
	<tr>
		<td>room type</td>
		<td>room number</td>
		<td>unit price/24</td>
		<td>customer type</td>
		<td>number of customers/1room</td>
	</tr>
	<?php  
	include 'connection.php';
	$sql=" SELECT * FROM avail";
	$query=mysqli_query($connection,$sql);
	while ($row=mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $row["room_type"];  ?></td>
			<td><?php echo $row["room_number"];  ?></td>
			<td><?php echo $row["unit_price"];  ?></td>
			<td><?php echo $row["customer_type"];  ?></td>
			<td><?php echo $row["c_number"];  ?></td>
		</tr>
	<?php
	}
	?>



</table>
</body>
</html>