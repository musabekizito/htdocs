<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		booking form
	</title>
</head>
<body>
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
 		<label>name</label>
 		<input type="text" name="name" required>
 		<label>email</label>
 		<input type="email" name="email" required>
 		<label>room type</label>
 		<input type="text" name="room_type" required>
 		<label>date of alival</label>
 		<input type="date" name="date" required>
 		<label>date of depurture</label>
 		<input type="date" name="date_of_d" required>
 		<label>address</label>
 		<input type="text" name="address" required>
 		<input type="submit" name="submit" value="BOOK NOW">
 	</form>
</body>
</html>