 <script type="text/javascript">
 	window.history.forward();
 </script>
 <?php 
 session_start();
 session_destroy();
 unset($_SESSION['username']);
 unset($_SESSION['password']);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
	form{
		color:white;
		background: black;
		border: 1px solid white;
		width: 300px;
		height: 340px;
		padding: 20px;
		text-align: center;
		position: absolute;
		top: 33%;
		left: 39%;
	}
	
	.top{
		background: black;
	}
	.img{
		width: 100%;
	}
	.input{
		background: transparent;
		color: white;
		border:none;
		border-bottom: 1px solid gold;
		border-left: 1px solid gold;
		padding: 5px;
		text-align: center;

	}
	label{
		font-family: snow;
		font-weight: bolder;
		font-size: 20px;
		text-align: left;
	}
	.h{
		background: skyblue;
		width: 100px;
		height: 40px;
		border: 1px solid white;
		font-weight: bold;
		font-size: 17px;
		color:white;
	}
	button{
		color: white;
		background: skyblue;
		height: 40px;
		border: 1px solid white;
		font-weight: bold;
		font-size: 17px;
		color:white;

	}
	a{
		color: white;
	}
	
</style>







	<div>
		<img src="images/HomeDesktopSlide1.jpg" class="img">
	</div>
	<form method="post"><br>
	<?php
	session_start();
include 'connection.php';
if (isset($_POST["submit"])) {
	$username=$_POST["username"];
	$password=$_POST["password"];
	$chech=" SELECT * from adminlogin where username='$username' && password='$password'";
	$query=mysqli_query($connection,$chech);
	$num=mysqli_num_rows($query);
	if ($num !== 1) {
		echo "<p style=background:transparent;color:red;text-align:center;font-size:22px;margin:10px;font-family:snow;>login fail</p>";
	}
	else{
		$_session['username'] = $username;
		header('location:home.php');
	}
}

	?>
		<h3>login here</h3>
		<label>
			username
		</label><br><br>
		<input type="text" placeholder="username" name="username" required class="input"><br>
		<label>password</label><br><br>
		<input type="password" placeholder="password" name="password" required class="input"><br><br>
		<input type="submit" name="submit" value="Admin login" class="h">
		<a href="home.html"><button>receptionist login</a></button><br><br>
		<a href="home.html"><button>housekeeper login</a></button>
		<a href="home.html"><button>cashier login</a></button>
	</form>
	<bu
</body>
</html>