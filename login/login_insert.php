<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="username" placeholder="Enter the username"><br><br>
		<input type="password" name="password" placeholder="Enter the password"><br><br>
		<input type="submit" name="login" value="Create account">

	</form>
	<?php

$con=mysqli_connect('localhost','root','','login');
if (isset($_POST['login'])) {
	$username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql=mysqli_query($con,"INSERT INTO form(username,password) VALUES ('$username','$password')");

    if ($sql) {
    	echo "Account created";
    }else
    {
    	echo "Account not created";
    }

}

	?>

</body>
</html>