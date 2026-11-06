<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		booking form
	</title>
	<div class="top">
	<center>
		<img src="images/logo.png"></center>
	</div>
</head>
<body>
<style>
	body{
		background: black;
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
	form{
		background: white;
		width: 420px;
		text-align: left;
		border: 3px solid gold;
		border-radius: 15px;
		padding: 12px;
	}
	.input{
		height: 22px;
		width: 350px;
		border-radius: 7px;
		border-bottom:1px solid gold;
		border-right: 1px solid gold;
		border-left: 1px solid green;
		border-top: 1px solid green;
	}
	button{
		height: 40px;
		width: 100px;
		background: gold;
	}


</style>






<br><br>
<center>
	<a href="rooms.html"><button>back</button></a>
</center>
<br><br><br>
<div><center>

 	<form method="POST">
 	<?php
 include 'connection.php';
 if (isset($_POST["submit"])) {
 	$name=$_POST["name"];
 	$email=$_POST["email"];
 	$room_type=$_POST["room_type"];
 	$date=$_POST["date"];
 	$date_d=$_POST["date_of_d"];
 	$address=$_POST["address"];

 	$sql="INSERT INTO issues (name,email,room_type,data,date_of_d,address) VALUES ('$name','$email','$room_type','$date','$date_d','$address')";

 	$query=mysqli_query($connection,$sql);

 }


 	?>
 		<h2>BOOK YOU OWN ROOM HERE</h2>
 		<label>name</label><br><br>
 		<input type="text" name="name" required class="input"><br><br>
 		<label>email</label><br><br>
 		<input type="email" name="email" required class="input"><br><br>
 		<label>room type</label><br><br>
 		<input type="text" name="room_type" required class="input">
 		<br><br>
 		<label>date of alival</label><br><br>
 		<input type="date" name="date" required class="input"><br><br>
 		<label>date of depurture</label><br><br>
 		<input type="date" name="date_of_d" required class="input"><br><br>
 		<label>address</label><br><br>
 		<input type="text" name="address" required class="input"><br><br>
 		<input type="submit" name="submit" value="BOOK NOW">
 	</form></center></div>
</body>
</html>