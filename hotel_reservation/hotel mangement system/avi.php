<?php  
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD AVAILABLE ROOM</title>
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
	.roo{
		border:1px solid gold;
		border-radius: 15px;
		width: 300px;
		padding: 12px;

	}
	.customer{
		border:1px solid gold;
		border-radius: 15px;
		width: 300px;
		padding: 12px;

	}
	.time{
		border:1px solid gold;
		border-radius: 15px;
		width: 300px;
		padding: 12px;

	}
	h1{
		color: gold;
	}
	form div{
		float: left;
		margin: 55px;
	}
	.add{
		position: absolute;
		top: 120%;
		left: 48%;
		color: white;
		background: gold;
		height: 40px;
		border: 1px solid white;
		font-weight: bold;
		font-size: 17px;
		color:white;
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
<form method="POST">
<?php 
include 'connection.php';
if (isset($_POST['submit'])) {
	$roomtype=$_POST["room_type"];
	$roomnumber=$_POST["room_number"];
	$price=$_POST["price"];
	$customertype=$_POST["customer_type"];
	$number=$_POST["customer_number"];
	$sql=" INSERT INTO avail (room_type,room_number,unit_price,customer_type,c_number) VALUES ('$roomtype','$roomnumber','$price','$customertype','number')";
	$query=mysqli_query($connection,$sql);
}


?>


	<label>room type</label><br><br>
	<input type="text" name="room_type" required><br><br>
	<label>room number</label><br><br>
	<input type="number" name="room_number" required><br><br>
	<label>unity price/24hrs</label><br><br>
	<input type="text" name="price" required placeholder="in dollars"><br><br>
	<label>customer type</label><br><br>
	<input type="text" name="customer_type" required><br><br>
	<label>customer number/1room</label><br><br>
	<input type="number" name="customer_number" required><br><br>
	<input type="submit" name="submit" value="ADD">
</form>
</body>
</html>