<?php
session_start();
require('dbconnect.php');

if(!$conn)
{
      die("failed to connect database").mysqli_connect_error();
}
else{
    if(isset($_POST['adminjoinbtn'])){
        
        $adminpassword=$_POST['adminpassword'];
        $query = "SELECT * FROM `adminlogin` WHERE `admin_username`='$_POST[adminusername]' AND `admin_password`='$adminpassword'";
        $result = mysqli_query($conn,$query);
        // while(mysqli_fetch_assoc($result)){
            if(mysqli_num_rows($result)==1){
                // session_start();
                $_SESSION['adminusername']=$_POST['adminusername'];
                header('location:index.php');
            // echo 'done';
        }else{
            $_SESSION['status'] = "Username OR Password Wrong";
            $_SESSION['status_code'] = "error";
        // }
    }
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="allcss/loginpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)), url("images/gymlogin1.jpg");

            background-position: center;
            background-size: cover;
            position: relative
        }
        .checkbox{
            margin-bottom: 20px;
        }
        .btnreg1{
            margin-bottom: 10px;
        }
    </style>
</head>

<body>


    <nav class="navbar123">
        <img src="images/logo.jpg" alt="" width="90px" height="60">
        <ul>
            <li><a class="link" href="index.php" style="text-decoration: none;">HOME</a></li>
            <li><a class="link" href="Fitness.php" style="text-decoration: none;">FITNESS</a></li>
            <li><a class="link" href="about.php" style="text-decoration: none;">ABOUT US</a></li>
            <li><a class="link" href="login.php" style="text-decoration: none;">LOGIN</a></li>
        </ul>
        <p>Samarth Fitness</p>
    </nav>

    <div class="registrationform">
        <form class="container loginform" method='POST'>
            <h1>Admin Login</h1>

            <div class="input">
                <span class="spanvalue" for="username"><b>Username :</b></span><br>
                <input class="box" type="text"  maxlength="20" size="5" name="adminusername"  placeholder="Enter Your Username" required>
            </div>

            <div class="input">
                <span class="spanvalue" for="password"><b>Password :</b></span><br>
                <input class="box" type="password"  size="8" maxlength="20" name="adminpassword" placeholder="Enter Your Password"  required>
                <br>
            </div>
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                <br>
                <br>
            </div>
        <button type="submit" class="btnreg1" name="adminjoinbtn"><b>Login</b></button>
    </div>
</body>
<?php
require('alert.php');

?>
</html>