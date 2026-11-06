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
		require 'connect.php';
		if (isset($_POST['insert'])) {
			$customerid=$_POST['customerid'];
			$customername=$_POST['customername'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];
		  $sql=mysqli_query($con,"INSERT INTO customers(customerid,customername,address,phone) VALUES('$customerid','$customername','$address','$phone')");
		  if ($sql) {
		  	echo "<script>alert('Customer is registered')</script>";
		  }else
		  {
		  	echo "<script>alert('Customer is not registered')</script>";
		  }
			
		}





		?>
	<form method="POST">
	<label>Customer id</label>
	<input type="text" name="customerid"><br><br>
	<label>Customer Name</label>
	<input type="text" name="customername"><br><br>
	<label>address</label>
	<input type="text" name="address"><br><br>
	<label>Phone number</label>
	<input type="number" name="phone"><br><br>


	<input type="submit" name="insert" value="Register a Customer">
	</form>
	
	<br><br>

<?php

$sel=mysqli_query($con,"SELECT * FROM customers");
?>
<table border="1" cellpadding="0" cellspacing="0" width="60%" style="text-align: center;">
<tr>
	<th>Customer Id</th>
	<th>Customer Name</th>
	<th>Customer Addresss</th>
	<th>Phone number</th>
	<th colspan="3">Action</th>

</tr>

<?php
while ($row=mysqli_fetch_array($sel)) {
	?>
	<tr>
		<td><?php echo $row['customerid']?></td>
		<td><?php echo $row['customername']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['phone']?></td>
		<td><a onclick="return confirm('Are you sure you want to upadate?')" href="update.php?customerid=<?php echo $row['customerid'] ?>">Upadte</a></td>
		<td><a onclick="return confirm('Are you sure you want to delete?')" href="update.php?customerid=<?php echo $row['customerid'] ?>">Delete</a></td>
		<td><a onclick="return confirm('Are you sure you want to invoice ?')" href="products.php?customerid=<?php echo $row['customerid'] ?>">invoice</a></td>
           

	</tr>


	<?php
	
}

?>
</table>
</center>
</body>
</html>