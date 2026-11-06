<?php 
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>ADD BOOKED ROOM NOW</title>
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
		<a href="add.php"><button>ADD</button><br><br></a>
	</center>
</div>
<form method="POST">
<?php  
include 'connection.php';
if (isset($_POST['submit'])) {
	$roomtype=$_POST["room_type"];
	$roomnumber=$_POST["room_number"];
	$customername=$_POST["customer_name"];
	$customeremail=$_POST["customer_email"];
	$customer_id=$_POST["customer_id"];
	$starting=$_POST["starting_date"];
	$leaving=$_POST["leaving_date"];
	$sql=" INSERT INTO availablerooms (room_type,room_number,customer_name,customer_email,customer_id,starting_date,leaving_date) values ('$roomtype','$roomnumber','$customername','$customeremail','$customer_id','$starting','$leaving')";
	$query=mysqli_query($connection,$sql);
}



?>  
	<div class="roo">
	<h1>room details</h1>
	<label>room type</label><br><br>
	<input type="text" name="room_type" required><br><br>
	<label>room number</label><br><br>
	<input type="number" name="room_number" required><br><br></div>
	<div class="customer">
	<h1>customer details</h1>
	<label>customer_name</label><br><br>
	<input type="text" name="customer_name" required><br><br>
	<label>customer email</label><br><br>
	<input type="email" name="customer_email" required><br><br>
	<label>customer id</label><br><br>
	<input type="number" name="customer_id" required><br><br></div>
	<div class="time">
	<h1>time details</h1>
	<label>date of arrival</label><br><br>
	<input type="date" name="starting_date" required><br><br>
	<label>date of deparche</label><br><br>
	<input type="date" name="leaving_date" required></div><br><br>
	<input type="submit" name="submit" value="ADD" class="add">
</form>
</body>
</html>