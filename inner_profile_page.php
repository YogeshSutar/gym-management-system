<?php
session_start();
require('dbconnect.php');
require("nav.php");
require('alert.php');
$username = $_SESSION['username'];
$query = "SELECT * FROM `users` WHERE `username`= '$username'";
$query_run = mysqli_query($conn ,$query);
if (mysqli_num_rows($query_run) > 0) {
while($data = mysqli_fetch_array($query_run)){
    $displayname =  $data['name'];
   $displayusername =  $data['username'];
   $displayemail =  $data['email'];
   $displayphone =  $data['phone'];
   $displaygender =  $data['gender'];
}
}
// $adminusername = $_SESSION['adminusername'];
// $query = "SELECT * FROM `adminlogin` WHERE `admin_username`= '$adminusername'";
// $query_run = mysqli_query($conn ,$query);
// if (mysqli_num_rows($query_run) > 0) {
// while($data = mysqli_fetch_array($query_run)){
// //     $displayname =  $data['admin_username'];
// //    $displayusername =  $data['username'];
// //    $displayemail =  $data['email'];
// //    $displayphone =  $data['phone'];
// //    $displaygender =  $data['gender'];
// }
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/inner_profiles.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>Profile Page</title>
    <style>
body {
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("images/profilepic.jpg");
position: fixed;
}

    </style>
</head>

<body>
    <?php 
    if(isset($_SESSION['username'])){
        ?>
        <div class="main_nav_box">
        <img src="images/user1.png" class="image_styling" alt="user_photo" width="300px"><br><br><br>
        <button style="margin-left:40px;" class="editbtn">Edit Photo<i class="fa-sharp fa-solid fa-image-portrait"></i></button>
        <button style="margin-left:50px;" class="editbtn">Delete<i class="fa-solid fa-trash"></i></button>
    </div>
    <div class="main_inner_box">
        <form action="update_profile.php" method="POST">

        <div class="sub_inner_box">
            <div class="details">
            <span class="detail_head"> Name : </span><br>
            <h2 class="input_inner"><?php echo $displayname?></h2>
        </div>
        <div class="details">
            <span class="detail_head"> Username : </span><br>
            <h2 class="input_inner"><?php echo $displayusername?></h2>
         

        </div>        
        <div class="details">

            <span class="detail_head"> Email : </span><br>
            <h2 class="input_inner"><?php echo $displayemail?></h2>


        </div> 
        <div class="details">

            <span class="detail_head"> Phone : </span><br>
            <h2 class="input_inner"><?php echo $displayphone?></h2>


        </div> 
        <div class="details">


            <span class="detail_head"> Gender : </span><br>
            <h2 class="input_inner"><?php echo $displaygender?></h2>


        </div>        
        <!-- <div class="details">

            <span class="detail_head"> Name : </span>
            <br>
            <h2 class="input_inner"><?php echo $displayname?></h2>

        </div> -->
    </div>
    <button class="editbtn" name="user_detail_btn">Edit<i class="fa-solid fa-pen"></i></button>
        </form>
</div>
        <?php  
        }
        ?>

</body>

</html>