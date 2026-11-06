<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	require 'connect.php';
	$customerid=$_GET['customerid'];
    $sel=mysqli_query($con,"SELECT * FROM customers WHERE customerid='$customerid'");
    while ($row=mysqli_fetch_array($sel)) {

	?>
	<form method="POST">
	<label>Customer Name</label><br>
	<input type="text" name="customername" value="<?php echo $row['customername'] ?>"><br><br>
	<label>Customer Address</label><br>
	<input type="text" name="address" value="<?php echo $row['address'] ?>"><br><br>
	<label>Phone number</label><br>
	<input type="number" name="phone" value="<?php echo $row['phone'] ?>"><br><br>
	<input type="submit" name="update" value="update Customer">
	</form>
	<?php
}

		if (isset($_POST['update'])) {
			
			$customername=$_POST['customername'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];

		  $sql=mysqli_query($con,"UPDATE customers SET customername='$customername', address='$address',phone='$phone' WHERE customerid='$customerid' ");
		  if ($sql) {
		  	echo "<script>alert('Customer is updated')</script>";
		  	echo "<script>window.location.href='Customer.php'</script>";
		  }else
		  {
		  	echo "<script>alert('Customer is not updated')</script>";
		  }
			
		}

?>
</body>
</html>