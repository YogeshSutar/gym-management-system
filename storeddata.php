<?php 
require("dbconnect.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name=$_POST['names'];
    $selected_plan = $_POST['plans'];
    $prices=$_POST['selected_price'];
    $durations = $_POST['durations'];
    $orderid = "OFF". rand(10000, 99999999);
    $payment_type = 'Offline';
    $status = 'SUCCESS';
    // $plannamesssss = $_GET['plannamesss'];

    echo $selected_plan;


    $query = "INSERT INTO `checkoutplane`(`order_new_id`, `name`, `username`, `selected_plan`, `txn_amount`, `status`, `duration`, `payment_type`) VALUES ('$orderid','$name','$username','$selected_plan','$prices','$status','$durations','$payment_type')";
    $result=mysqli_query($conn,$query);

}else{
    echo 'data not sebmited';
    // header("location:admin_panel_offline_users_payment.php");
    
}
header("location:storeddata_in_user_plan.php?name=$name & username=$username & planname=$selected_plan & duration=$durations ");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>