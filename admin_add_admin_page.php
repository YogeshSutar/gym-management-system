<?php
session_start();
include("dbconnect.php");
if(isset($_POST['add_new_admin_btn'])){
    $add_admin = $_POST['add_admin'];
    $add_admin_password = $_POST['add_admin_password'];

    $addquery = "INSERT INTO `adminlogin`(`admin_username`, `admin_password`) VALUES ('$add_admin','$add_admin_password')";

    $addresult = mysqli_query($conn,$addquery);
    if ($addresult) {
        // echo "<script>
        // window.location.href='admin_panel_admins.php';
        // </script>";   
        $_SESSION['status'] = "New Record Successfully Added";
        $_SESSION['status_code'] = "success";
        header("location:admin_panel_admins.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        $_SESSION['status_code'] = "error";
        header("location:admin_panel_admins.php");
    }
}
else{
    // echo 'admin not added';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="sweetalert.js"></script>
</head>
<style>
    body {
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/update_admin_bg.jpg");
        background-position: center;
        background-size: cover;
        padding: 80px;
        margin: 30px;
    }

    .main_box {

        background-color: rgba(41, 41, 41, 0.592);
        width: 600px;
        padding: 50px 30px;
        border-radius: 15px;
        margin-left: 11%;
        margin-top: 1%;

    }

    input {
        color: white;
        padding: 10px;
        width: calc(100% / 1 - 23px);
        font-size: 30px;
        margin-right: 80px;
        border-radius: 5px;
        background: none;
    }

    .admin_box {}

    .spanname {
        color: white;
        font-size: 40px;
        padding-bottom: 20px;
    }

    .btnreg {
        font-size: 20px;
        margin: 24px 240px;
        padding: 20px 30px;
        outline: none;
        color: rgb(255, 255, 255);
        border-radius: 10px;
        border: 2px solid white;
        background: none;
    }

    #line {
        text-decoration: none;
    }

    .btnreg:hover {
        color: black;
        background: rgb(255, 255, 255);
        transition: 0.3s;
    }
</style>

<body>
    <!-- <script>swal("Hello world!");</script> -->

    <form action="" method="POST">
        <div class="main_box">
        <div style="display: none;">
                <div><span class="spanname">id</span></div>
                <br>
                <input type="text" class="in" name="id">
            </div>
            <div class="admin_box">
                <div><span class="spanname">Admin Name</span></div>
                <br>
                <input type="text" class="in" name="add_admin" required>
            </div>
            <br>
            <div class="password_box">
                <div><span class="spanname">Password</span></div>
                <br>
                <input type="text" class="passwordinput" name="add_admin_password" required>
            </div>
            <button class="btnreg btn" href="#" id="btn" class="registerbtn" onclick="return add_record()" name="add_new_admin_btn"><b>Add</b></button>

        </div>
    </form>

</body>

</html>