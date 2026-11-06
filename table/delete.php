<?php
 $con=mysqli_connect('localhost','root','','homework');
 $Regno=$_GET['Regno'];
 $del=mysqli_query($con,"DELETE FROM students WHERE Regno='$Regno'");
 if ($del) {
 echo"<script>window.location.href='homework.php'</script>";
 }
 else{
 	 echo"<script>alert('Datan not deleted')</script>";
 }




mysqli_close($con);
?>