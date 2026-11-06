 <script type="text/javascript">
    window.history.forward();
</script>
<?php
 $con=mysqli_connect('localhost','root','','login');
session_start();
if (isset($_SESSION['username'])&& !empty($_SESSION['username'])) {
	echo"Welcome,"." "."<b>".$_SESSION['username']."<b>";

}
mysqli_close($con);
?>
<br><br>

<td><a onclick="return confirm('Are you sure you want to log out?')" href="logout.php"><input type="submit" name="login" value="Logout"></a></td>
<td><a onclick="return confirm('Are you sure you want to change password?')" href="change_pass.php"><input type="submit"  value="Change password"></a></td>