<?php
include 'connection.php';
if (isset($_POST['done'])) {
	$roomtype=$_POST["room_type"];
	$roomnumber=$_POST["room_number"];
	$customername=$_POST["customer_name"];
	$customeremail=$_POST["customer_email"];
	$customer_id=$_POST["customer_id"];
	$starting=$_POST["starting_date"];
	$leaving=$_POST["leaving_date"];
    
   $sql=" SELECT * FROM availablerooms";
   $query=mysqli_query($connection,$sql);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>ROOM MANAGEMENT</title>
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
		<a href="add.php"><button>ADD</button><br><br></a>
	</center>
</div>
   <table border="1">
   	<tr>
		<td>room type</td>
		<td>room number</td>
		<td>customer name</td>
		<td>customer email</td>
		<td>customer id</td>
		<td>starting date</td>
		<td>leaving date</td>
	</tr>
	<?php
	include 'connection.php';
	$sql=" SELECT * FROM availablerooms";
    $query=mysqli_query($connection,$sql);
    while ($row=mysqli_fetch_array($query)) {
    	?>
        	<tr>
        		<td><?php echo $row["room_type"]; ?></td>
        		<td><?php echo $row["room_number"]; ?></td>
        		<td><?php echo $row["customer_name"]; ?></td>
        		<td><?php echo $row["customer_email"]; ?></td>
        		<td><?php echo $row["customer_id"]; ?></td>
        		<td><?php echo $row["starting_date"]; ?></td>
        		<td><?php echo $row["leaving_date"]; ?></td>
        	</tr>
    <?php
    }
    ?>

	  
   </table>
</body>

</html>