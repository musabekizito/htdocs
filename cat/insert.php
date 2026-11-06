<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Create a new account</h1>
	<form method="POST">
	<label>Username:</label>
	<input type="text" name="username"><br><br>
	<label>Password:</label>
	<input type="Password" name="password"><br><br>
	<input type="submit" name="insert" value="insert">
	<input type="reset" value="Cancel">
	</form>
	<?php
	require 'connection.php';
   
    if (isset($_POST['insert'])) {
        $username=$_POST['username'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $patterns="/^[a-z]+$/";
        $patternn="/^[a-zA-Z0-9]{8,100}+$/";
   
		if (!preg_match($patterns,$username)) {

			?>
		<script>alert("Username should only contain lowercase letter")</script>
			<?php
		}else{

			if (!preg_match($patternn,$password)) {
				?>
				<script>alert("Password should contain at least one uppercase letter, at least one lowercase letter, at least one digit character and should be 8 character in long.")</script>
					<?php

		   
		}else{

			$sql=mysqli_query($con,"INSERT INTO users(username,password) VALUES ( '$username','$password')");
		if ($sql) {
			echo"data is inserted";  

		}
		else
		{
			echo"data is not inserted";

			
		}
		

		}

	}

}
?>

</body>
</html>