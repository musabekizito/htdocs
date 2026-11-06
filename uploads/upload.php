<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<?php
$con=mysqli_connect('localhost','root','','upload');
if (isset($_POST['submit'])) {
	$name=$_POST['name'];

	$file_name=$_FILES['images']['name'];
	$tempname=$_FILES['images']['tmp_name'];
	$path='file/'.$file_name;
	$sql=mysqli_query($con,"INSERT INTO files(id,name,images) VALUES ('','$name','$file_name')");
	if (move_uploaded_file($tempname,$path)) {
	echo"<h1>Upload image successfully..</h1>";
	}
	else
	{
		echo"<h1>Upload image not successfully..</h1>";
	}
}
?>
	<form method="POST" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="name"><br><br>
		<label>Upload</label>
		<input type="file" name="images">
		<input type="submit" name="submit" value="Upload">
	</form>
	<br><br>
	<?php
$sel=mysqli_query($con,"SELECT * FROM files");
while ($row=mysqli_fetch_array($sel)) {
	?>
	<tr>
		<td><?php echo $row['name']?></td>
		<img src="file/<?php echo  $row['images']?>" style=" width: 100px; height: 100px;">
	</tr>


	<?php
	
}

	?>


</body>
</html>