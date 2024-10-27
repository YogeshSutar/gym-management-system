<?php
session_start();
include_once("dbconnect.php");
include('alert.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <form action="">
        <div class="main_box">
        <div style="display: none;">
                <div><span class="spanname">id</span></div>
                <br>
                <input type="text" class="in" name="id" value="<?php echo $_GET['update_id'] ?> ">
            </div>
            <div class="admin_box">
                <div><span class="spanname">Admin Name</span></div>
                <br>
                <input type="text" class="in" name="admin" value="<?php echo $_GET['update_adminname'] ?> ">
            </div>
            <br>
            <div class="password_box">
                <div><span class="spanname">Password</span></div>
                <br>
                <input type="text" class="passwordinput" name="password" value="<?php echo $_GET['update_password'] ?> ">
            </div>
            <button class="btnreg btn" href="#" id="btn" class="registerbtn" name="submit"><b>Update</b></button>

        </div>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $id = $_GET['id'];
        $adminname = $_GET['admin'];
        $password = $_GET['password'];


        $query = "UPDATE `adminlogin` SET `admin_username`='$adminname',`admin_password`='$password' WHERE `admin_id`='$id'";
        $data = mysqli_query($conn, $query);
        if ($data) {
            $_SESSION['status'] = "Admin Record Update successfully";
            $_SESSION['status_code'] = "success";
            // echo "<script>alert('Admin Record Update successfully');</script>";
            // header("location:adminpage.php");
    ?>
            <meta http-equiv="refresh" content="0, URL= http://localhost/gym/admin_panel_admins.php">
    <?php
        } else {
            $_SESSION['status'] = "No Update Admin Record";
            $_SESSION['status_code'] = "error";
            // echo "<script>alert('No Update Admin Record');</script>";
        }
    }
    ?>
</body>

</html>