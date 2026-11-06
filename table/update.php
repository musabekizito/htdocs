<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<?php
		 $con=mysqli_connect('localhost','root','','homework');
         $Regno=$_GET['Regno'];
		$sel=mysqli_query($con,"SELECT * FROM students WHERE Regno='$Regno'");
        while ($row=mysqli_fetch_array($sel)) {
    	?>
    <form action="" method="POST">
        <label for="">Firstname:</label>
        <input type="text" name="First_Name" value="<?php echo $row['First_Name']?>"><br><br>
        <label for="">Lastname:</label>
        <input type="text" name="Last_Name" value="<?php echo $row['Last_Name']?>"><br><br>
        <label for="">Location:</label>
        <input type="text" name="Location" value="<?php echo $row['Location']?>"><br><br>
        <label for="">Email:</label>
        <input type="text" name="Email" value="<?php echo $row['Email']?>"><br><br>
        <input type="submit" name="update" value="Update">
       </form>
       <?php
   }
        if (isset($_POST['update'])) {
        $First_Name=$_POST['First_Name'];
        $Last_Name=$_POST['Last_Name'];
        $Location=$_POST['Location'];
        $Email=$_POST['Email'];
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if (preg_match($pattern, $Email)) {
         $sql=mysqli_query($con," UPDATE students SET First_Name='$First_Name',Last_Name='$Last_Name',Location='$Location',Email='$Email' WHERE Regno='$Regno' ");

              if ($sql) {

                echo"<script>alert('Data is updated')</script>";
                echo"<script>window.location.href='homework.php'</script>";

        }
        else{
        	 echo"<script>alert('Data is not updated')</script>";

        }
    }
        else
        {
             echo"Invalid email address";
        }
    }


   ?>

</body>
</html>