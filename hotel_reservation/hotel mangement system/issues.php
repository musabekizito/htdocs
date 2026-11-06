<?php
include 'connection.php';
if (isset($_POST["done"])) {
	$name=$_POST["name"];
	$email=$_POST["email"];
	$roomtype=$_POST["room_type"];
	$date_a=$_POST["date"];
	$date_d=$_POST["date_of_d"];
	$address=$_POST["address"];
}
$sql=" SELECT * FROM issues";
$query=mysqli_query($connection,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<title>customer issues</title>
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
		color: white;
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
   </div><br><br><br><br><br><br><br>
	<table border="2" cellspacing="0">
		<tr>
			<td>name</td>
			<td>email</td>
			<td>room type</td>
			<td>date of alival</td>
			<td>date of departur</td>
			<td>address</td>
		</tr>


<?php
include 'connection.php';
$sql=" SELECT * FROM issues";
$query=mysqli_query($connection,$sql);
while ($rec=mysqli_fetch_array($query)) {
?>

<tr>
<td><?php echo $rec["name"]; ?></td>
<td><?php echo $rec["email"]; ?></td>
<td><?php echo $rec["room_type"]; ?></td>
<td><?php echo $rec["data"]; ?></td>
<td><?php echo $rec["date_of_d"]; ?></td>
<td><?php echo $rec["address"]; ?></td>
</tr>
<?php
}
?>


?>

</table>
</body>
</html>