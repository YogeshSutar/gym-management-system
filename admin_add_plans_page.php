<?php
session_start();
include_once("dbconnect.php");
require('alert.php');

if (isset($_POST['add_new_plan_btn'])) {
    $add_planname = $_POST['add_planname'];
    $add_price = $_POST['add_price'];
    $add_duration = $_POST['add_duration'];


    $addquery = "INSERT INTO `plan`(`plan_name`, `price`, `date`, `duration`) VALUES ('$add_planname','$add_price',NULL,'$add_duration')";
    // INSERT INTO `plan`(`id`, `plan_name`, `price`, `date`, `duration`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
    $addresult = mysqli_query($conn, $addquery);
    if ($addresult) {
        $_SESSION['status'] = "New Record Successfully Added";
        $_SESSION['status_code'] = "success";
        header("location:admin_panel_plans.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        $_SESSION['status_code'] = "error";
        header("location:admin_panel_plans.php");
    }
} else {
    // echo 'admin not added';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plan</title>
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
    .back_btn{
        margin-left: 88%;
    margin-top: -87px;
    margin-bottom: 40px;
    padding: 20px;
    }

    /* .details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
} */
</style>

<body>

    <form action="" method="POST">
        <div class="main_box">
            <div style="display: none;">
                <div><span class="spanname">id</span></div>
                <br>
                <input type="text" name="planid">
            </div>

            <div>
                <div><span class="spanname">Plan Name</span></div>
                <br>
                <input type="text" name="add_planname" required>
            </div>

            <div>
                <div><span class="spanname">Price</span></div>
                <br>
                <input type="text" class="passwordinput" name="add_price" required>
            </div>

            <div>
                <div><span class="spanname">Duration</span></div>
                <br>
                <input type="text" name="add_duration" required>
            </div>

            <button class="btnreg btn" id="btn" class="registerbtn" name="add_new_plan_btn"><b>Add Plan</b></button>
            <button class="back_btn"><a href="admin_panel_plans.php" style="text-decoration: none; color:light-blue; font-size:15px;">back</a></button>

            
        </div>
    </form>

</body>
<?php  ?>

</html>