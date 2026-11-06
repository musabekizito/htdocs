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
    if (isset($_POST['searchs'])) {
      $First_Name=$_POST['First_Name'];
   $sel=mysqli_query($con,"SELECT * FROM students WHERE First_Name LIKE '%$First_Name%'");
    ?>
    <br>
<table border="1" cellpadding="0" cellspacing="0" width="1200px">
   
    <tr>
         <th>Regno</th>
        <th>FirstName</th>
         <th>LastName</th>
          <th>Locatio</th>
           <th>Email</th>
            <th colspan="2">Action</th>
    </tr>


    <?php
    while ($row=mysqli_fetch_array($sel)) {
        ?>
        <tr>
            <td><?php echo $row['Regno'];?></td>
            <td><?php echo $row['First_Name'];?></td>
            <td><?php echo $row['Last_Name'];?></td>
            <td><?php echo $row['Location'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><a onclick="return confirm('Are you sure you wanat to upadate?<?php echo $row['First_Name']?>')" href="update.php?Regno=<?php echo $row['Regno'] ?>">Upadte</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete?<?php echo $row['First_Name']?>')" href="delete.php?Regno=<?php echo $row['Regno'] ?>">Delete</a></td>
            
        </tr>



        <?php
    
    }
}

    ?>
        
    </table>
    </center>

</body>
</html>