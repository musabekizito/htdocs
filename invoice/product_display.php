<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>

<div style="float: left; margin-left: 200px;">
	
			<h1>NEZA SUPERMAKET</h1>
			<p>
		         <?php
			  require 'connect.php';
			  $customerQuery =mysqli_query($con, "SELECT address FROM customers  ");
			  $row = mysqli_fetch_assoc($customerQuery);
			  $address= $row['address'];
			  echo "<p>Adress:$address</p>";
			  ?>
			</p>
			<p>
		      <?php
	       require 'connect.php';
              $customerQuery =mysqli_query($con, "SELECT phone FROM customers  ");
              $row = mysqli_fetch_assoc($customerQuery);
              $phone= $row['phone'];
              echo "<p>Phone:$phone</p>";
               ?>
             </p>
             <p><?php
	 require 'connect.php';
        $customerQuery =mysqli_query($con, "SELECT customername FROM customers  ");
        $row = mysqli_fetch_assoc($customerQuery);
        $customerName = $row['customername'];
        echo "<p>Bill to  $customerName</p>";
          ?></p>
		
		</div>

		<div style="float: right; margin-right: 350px;">
	
			<h1>INVOICE</h1>
			 <?php
       
        require 'connect.php';
        $dateQuery = mysqli_query($con, "SELECT CURDATE() AS currentDate");
        $row = mysqli_fetch_assoc($dateQuery);
        $currentDate = $row['currentDate'];
        ?>
         <p>Date: <?php echo $currentDate; ?></p>
          <?php
    
        $soldNumberQuery = mysqli_query($con, "SELECT productsoldnumber FROM products ");
        $row = mysqli_fetch_assoc($soldNumberQuery);
        $soldNumber = $row['productsoldnumber'];
        echo "<p>Invoice# $soldNumber</p>";
        ?>
		
		</div>
   
		
<?php

$sel=mysqli_query($con,"SELECT * FROM products ");
?>
<table border="1" cellpadding="0" width="70%" style="border-collapse: collapse;">
	<tr>
		<th>ITEM</th>
		<th>Quantity</th>
		<th>P/U(Rwf)</th>
		<th>Total(Rwf)</th>
	</tr>
	

<?php
$totalAll = 0;
while ($row=mysqli_fetch_array($sel)) {
	$total = $row['quantity'] * $row['unit']; 
    $totalAll += $total; 
	
	?>
	<tr>
		<td><?php  echo $row['item'] ?></td>
		<td><?php  echo $row['quantity'] ?></td>
		<td><?php  echo $row['unit'] ?></td>
		<td><?php  echo $total?></td>

</tr>

	<?php

}

?>
<tr>
	<td style="text-align: right; border-bottom: none;" colspan="3"><b>TOTAL OF ALL</b></td> 
	<td><b><?php echo $totalAll; ?></b></td>

</tr>
	
</table>
 <?php
       
        $result = mysqli_query($con, "SELECT SUM(total) AS total_all FROM products");
        $row = mysqli_fetch_assoc($result);
        $totalAllFromDB = $row['total_all'];
        ?>

</center>

</body>
</html>