<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme" content="dark light">
    <style>
        /* Bordered form */
        form {
            border: 3px solid #f1f1f1;
        }

        /* Full-width inputs */
        input[type="text"],
        input[type="password"] {
         width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
             width: 500px;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 2px 0 10px 0;
            padding-bottom : -55px;
            padding-top : -25px;
        }

        /* Avatar image */
        img.avatar {
            width: 8.5%;
            border-radius: 40%;
            /**height :10;*/
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

    
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        h1
        {
            color: red;
        }
    </style>
</head>
<body>
    <center>
    <form action="" method="POST">
        <div class="imgcontainer">
            <img src="twitter_avatar.jpg" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>username</b></label>
            <input type="text" placeholder="Enter username" name="username" ><br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" ><br><br>
            <button type="submit" name="login">Login</button>
          
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="reset" class="cancelbtn">Cancel</button>
            
        </div>
    </form>
   <script type="text/javascript">
    window.history.forward();
</script>
    <?php
    $con=mysqli_connect('localhost','root','','login');
    session_start();
    if (isset($_POST['login'])){
        $username=$_POST['username']; 
        $password=$_POST['password']; 
        $sel=mysqli_query($con,"SELECT * FROM login_user WHERE username='$username' AND password='$password'");
        $row=mysqli_num_rows($sel);
        if ($row) {
            echo"<script>alert('Login successfully')</script>";
             echo"<script>window.location.href='home.php'</script>";

            $_SESSION['username']=$_POST['username'];
        }else
        {
            echo"<h1>Incorrect, Try angin</h1>".mysqli_connect_error();
        }
       
    }
mysqli_close($con);


    ?>
    </center>
   
</body>
</html>