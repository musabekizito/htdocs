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
		<label>Product sold number</label>
		<input type="text" name="productsoldnumber"><br><br>
		<label>Items</label>
		<input type="text" name="item"><br><br>
		<label>Quantity</label>
		<input type="text" name="quantity"><br><br>
		<label>Unit price</label>
		<input type="text" name="unit"><br><br>
		<label>Date</label>
		<input type="date" name="date"><br><br>
		<label>customer Id </label>
		<input type="text" name="customerid" value="<?php echo $row['customerid']?>"><br><br>
		<input type="submit" name="invoice" value="Invoice">
	</form>
<?php
}
if (isset($_POST['invoice'])) {
	$productsoldnumber=$_POST['productsoldnumber'];
	$item=$_POST['item'];
	$quantity=$_POST['quantity'];
	$unit=$_POST['unit'];
	$total=$quantity*$unit;
	$date=$_POST['date'];
	$sql=mysqli_query($con,"INSERT INTO products(productsoldnumber,item,quantity,unit,total,date,customerid) VALUES ('$productsoldnumber','$item','$quantity','$unit','$total','$date','$customerid')");
	if ($sql) {
	echo "<script>alert('The invoce is successfully..')</script>";
	echo "<script>window.location.href='product_display.php'</script>";

	}else
	{
		echo "<script>alert('The invoce is  failed..')</script>";
	}

	
}
?>
</body>
</html>
