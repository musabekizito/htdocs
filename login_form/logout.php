<script type="text/javascript">
	window.history.forward();
</script>
<?php
 $con=mysqli_connect('localhost','root','','login');
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['password']);
 echo "<script>window.location.href='login.php'</script>";
 mysqli_close($con);
?>