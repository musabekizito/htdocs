<?php
$password= 1234;
$hashedpassword=password_hash($password,PASSWORD_DEFAULT);
echo "Hashed password:".$hashedpassword."<br><br>";
$submittedpassword= 1234;
if (password_verify($submittedpassword,$hashedpassword)) {
	echo "Password match,login successfully";
}else
{
	echo "Password don't match,login failed";
}


?>

