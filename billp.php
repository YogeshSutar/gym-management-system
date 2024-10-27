<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/6cba7c1ded.js" crossorigin="anonymous"></script>
</head>

<?php

require('dbconnect.php');

if (!$conn) {
    echo 'database not connect';
} else {
    // This Submit Button For Go Back To Fitness Page

    if (isset($_POST['submit'])) {
        header('location:fitness.php');
    }

    session_start();
    $username = $_SESSION['username'];
    $plan = $_GET["plan"];
    $price = $_GET["price"];
    $sqlfe = "SELECT * FROM `checkoutplane` where `username`='$username' and `selected_plan`='$plan' and `txn_amount`='$price'";
    // $username=$_POST['username'];   
    // $order = $_GET['ORDER_ID'];
    // $planname=$_POST["planname"];
    // $price = $_GET["price"];
    // $status = $_GET["TXN_STATUS"];
    //    $username = $_SESSION['username'];
    $importdata = mysqli_query($conn, $sqlfe);
    $total = mysqli_num_rows($importdata);
    if ($total != 0) {
        while ($data = mysqli_fetch_assoc($importdata)) {

            $username = $data['username'];
            $order_new_id = $data['order_new_id'];
            // $orderid = $data['orderid'];
            $txn_amount = $data['txn_amount'];
            $selected_plan = $data['selected_plan'];
            $status = $data["status"];
            $duration = $data["duration"];

            // $as = mysqli_num_rows($importdata);
            // echo $as;
            // var_dump($as);
            // print_r($as);
            //    $price = $data['price'];
        }
        $usersql = "SELECT * FROM `users` WHERE `username`='$username'";
        $uusersdata = mysqli_query($conn, $usersql);
        while ($userdetail = mysqli_fetch_assoc($uusersdata)) {
            $name = $userdetail['name'];
            $phone = $userdetail['phone'];
            $email = $userdetail['email'];
        }
    }
}


if (!empty($_POST['print'])) {
    // $username=$_POST['username'];
    // 	$order = $_POST['ORDER_ID'];
    // 	$planname = $_POST["planname"];
    // 	$price = $_POST["price"];



}


?>
<style>
    /* 
    .heading p {
        font-size: 20px;
        margin-left: -13%;
        margin-top: -27px;
        margin-bottom: 38px;
    }

    .heading h1 {
        font-size: 54px;
        margin-left: -13%;
        margin-top: -3px;
    } */

    .name_phone {
        /* border: 2px solid red; */
        padding-bottom: 20px;
        width: 50%;

        padding-left: 7%;


    }

    .name_phone h2 {
        padding-bottom: 8px;
    }

    .name_username {
        font-size: 20px;
        /* border: 2px solid red; */
        display: flex;
        padding-top: 30px;
    }

    .username {
        /* border: 2px solid red; */
        float: right;
        padding-left: 15%;
        width: 50%;
        margin-bottom: 50px;

    }

    .table_block {
        padding-left: 70px;
        padding-right: 70px;
    }

    tr,
    th,
    td {
        padding: 10px;
        font-size: 20px;
        border: 2px solid black;
        text-align: center;
        /* width: ; */
    }



    .signbox {
        /* border: 1px solid red; */
        padding-left: 100px;
        padding-top: 80px;
    }
    span{
        color: red;
    }
    .btnreg {
        font-size: 20px;
        /* margin-left:600px; */
        padding: 5px 30px;
        outline: none;
        color: black;
        border-radius: 10px;
        border: 2px solid black;
        background: none;
        margin-bottom: 50px;
    }

    #line {
        text-decoration: none;
    }

    .btnreg:hover {
        transition: 0.3s;
        color: black;
        background: lightskyblue;
    }
</style>

<body>

    <div class="heading">
        <img href="about.php" src="images/logo.jpg" alt="" style="background-color: rgba(0, 0, 0, 0.904);" name="navheadimg" width="100%" height="350">
        <!-- <big>
            <h1 style="margin-left: -13%;">Samath Fitness</h1>
        </big>
        <p style="margin-left: -13%;">Kharalwadi Pimpri Pune - 411018</p> -->
    </div>
    <main class="name_username">
        <div class="name_phone">
            <h2 style="font-size: 23px;">Name : <span><?php echo $name; ?></span></h2>
            <h2 style="font-size: 23px;">Phone No : <span><?php echo $phone; ?></span></h2>
            <h2 style="font-size: 23px;">Username : <span><?php echo $username; ?></span></h2>
            <h2 style="font-size: 23px;">Email : <span><?php echo $email; ?></span></h2>
        </div>
        <!-- <div class="username" >
            <h2 style="font-size: 23px;">Username : <?php echo $username; ?></h2>
            <h2 style="font-size: 23px;">Email : <?php echo $email; ?></h2>
        </div> -->
    </main>
    <div class="table_block">
        <table class="table table-bordered text-center">
            <tr style=" color:black;">
                <th>Order Id</th>
                <th>Plan</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Amount</th>
            </tr>
            <tr sty>
                <td><?php echo $order_new_id; ?></td>
                <td><span><?php echo $plan; ?></span></td>
                <td><?php echo $duration; ?></td>
                <td><?php echo $status; ?></td>
                <td><span><?php echo $price; ?></span></td>
            </tr>
            <tr>
                <td colspan="4" style="font-size:25px; font-weight:bold;">Total Amount : </td>
                <td style="font-size:25px; font-weight:bold;"><span><?php echo $price; ?></span></td>
            </tr>
        </table>
    </div>
    <!-- 
    <div class="signbox">
        <h2>Samarth Fitness </h2>
    </div> -->
    <div class="signbox">
        <button id="button" class="btnreg" onclick="window.print()">Print</button>
    </div>
    <script>
        // $window = document.getElementById("button");
        // document.getElementById('button').addEventListener("click",()=>{

        //     document.getElementById('button').style.display = "none";
        // });
    </script>
</body>

</html>