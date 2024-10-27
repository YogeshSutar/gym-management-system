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
        display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
        background-color: rgba(41, 41, 41, 0.592);
        width: 75%;
        padding: 50px 30px;
        border-radius: 15px;
        margin-left: 1%;
        margin-top: 1%;

    }

    input {
        color: white;
        display: flex;
        padding: 10px;
        margin-bottom: 20px;
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
        margin: 24px 360px;
        padding: 20px 100px;
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
    /* .details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
} */
</style>

<body>

    <form action="">
        <div class="main_box">
        <div style="display: none;">
                <div><span class="spanname">id</span></div>
                <br>
                <input type="text"  name="planid" value="<?php echo $_GET['update_plan_id'] ?> ">
            </div>

            <div >
                <div><span class="spanname">Plan Name</span></div>
                <br>
                <input type="text"  name="planname" value="<?php echo $_GET['update_planname'] ?> ">
            </div>
          
            <div >
                <div><span class="spanname">Price</span></div>
                <br>
                <input type="text" class="passwordinput" name="price" value="<?php echo $_GET['update_price'] ?> ">
            </div>

            <div >
                <div><span class="spanname">Duration</span></div>
                <br>
                <input type="text"  name="duration" value="<?php echo $_GET['update_duration'] ?> ">
            </div>

            <button class="btnreg btn" href="#" id="btn" class="registerbtn" name="submit"><b>Update</b></button>

        </div>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $id = $_GET['planid'];
        $planname = $_GET['planname'];
        $price = $_GET['price'];
        $duration = $_GET['duration'];


        $query = "UPDATE `plan` SET `plan_name`='$planname',`price`='$price',`duration`='$duration' WHERE `id`='$id'";
        $data = mysqli_query($conn, $query);
        if ($data) {
            $_SESSION['status'] = "Admin Record Update successfully";
            $_SESSION['status_code'] = "success";
            // echo "<script>alert('Admin Record Update successfully');</script>";
            // header("location:adminpage.php");
    ?>
            <meta http-equiv="refresh" content="0, URL= http://localhost/gym/admin_panel_plans.php">
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