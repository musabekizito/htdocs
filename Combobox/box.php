<?php
$con=mysqli_connect('localhost','root','','company');
$sel=mysqli_query($con,"SELECT * FROM employees");
?>
<label>Select category</label>
<select>


<?php
while ($row=mysqli_fetch_array($sel)) {
	?>
	<option><?php echo $row['title']?></option>

	<?php	
}
?>
</select>