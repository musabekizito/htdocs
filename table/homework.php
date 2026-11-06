<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <label for="">Firstname:</label>
        <input type="text" name="First_Name"><br><br>
        <label for="">Lastname:</label>
        <input type="text" name="Last_Name"><br><br>
        <label for="">Location:</label>
        <input type="text" name="Location"><br><br>
        <label for="">Email:</label>
        <input type="text" name="Email"><br><br>
        <input type="submit" name="submit" value="Add">
        <input type="reset" value="Reset">

    </form>
    <?php
    $con=mysqli_connect('localhost','root','','homework');
    if (isset($_POST['submit'])) {
        $First_Name=$_POST['First_Name'];
        $Last_Name=$_POST['Last_Name'];
        $Location=$_POST['Location'];
        $Email=$_POST['Email'];
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if (preg_match($pattern, $Email)) {
         $sql=mysqli_query($con,"INSERT INTO students(Regno,First_Name,Last_Name,Location,Email) VALUES ('','$First_Name','$Last_Name','$Location','$Email')");

              if ($sql) {

                echo"<script>alert('Data is inserted')</script>";
        }
        else{
            echo"<script>alert('Data is not inserted')</script>";

        }
    }
        else
             echo"Invalid email address".mysqli_connect_error();
    }

    ?>
    <br><br><br>
    <?php
    
    $sel=mysqli_query($con,"SELECT * FROM students");
    ?>
    <br><br>
     <form method="POST" action="search.php">
        <label>Search</label>
        <input type="text" name="First_Name" placeholder="Search the Firstname..">
        <input type="submit" name="searchs" value="Search">
    </form>

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
      mysqli_close($con);
    ?>
        
    </table>
    </center>

</body>
</html>