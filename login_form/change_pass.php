<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<form method="POST">
		<label>Old password</label>
		<input type="password" name="old_pass" placeholder="Old Password"><br><br>
		<label>New password</label>
		<input type="password" name="new_pass" placeholder="New Password"><br><br>
		<label>Retype password</label>
		<input type="password" name="re_pass" placeholder="Retype Password"><br><br>
		<input type="submit" name="change" value="Change password">
	</form>
	<?php
	$con=mysqli_connect('localhost','root','','login');
	if (isset($_POST['change'])) {
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$sel=mysqli_query($con,"SELECT * FROM login_user WHERE id='$id' ");
		$row=mysqli_fetch_array($sel);
		$data=$row['password'];
		if ($data==$old_pass) {
	    if ($new_pass==$re_pass) {
				$change=mysqli_query($con,"UPDATE login_user SET  password='$new_pass' WHERE id='$id' ");

				echo "<script>alert('Password is changed')</script>";
				echo "<script>window.location.href='login.php'</script>";
			}
			else
			{
				echo "<script>alert('New and retype password are not match')</script>".mysqli_connect_error();
			}}
			else
			{
				echo "<script>alert('Old password wrong ')</script>".mysqli_connect_error();

		}
	}
	mysqli_close($con);
	?>

</center>
</body>
</html>