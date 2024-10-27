<?php
require("dbconnect.php");
require('alert.php');
$name=$_GET['name'];
$username=$_GET['username'];
$planname=$_GET['planname'];
$duration=$_GET['duration'];

// $current_date = date("Y-m-d h:i:sa");
// $sql="INSERT INTO `plan_user` VALUE('NULL','$name','$username','$planname','$duration','$current_date')";
$sql="INSERT INTO `plan_user` (`name`,`username`,`plan_name`,`duration`,`end_time`) VALUE('$name','$username','$planname','$duration',CURRENT_TIMESTAMP + INTERVAL '$duration' minute)";
$insert=mysqli_query($conn ,$sql);
// header("location:admin_panel_offline_users_payment.php");

if ($insert) {
    $_SESSION['status'] = "Offline Payment Successfully ";
    $_SESSION['status_code'] = "success";
    // echo "<script>alert('Admin Record Update successfully');</script>";
    // header("location:adminpage.php");
?>
    <meta http-equiv="refresh" content="0, URL= http://localhost/gym/admin_panel_offline_users_payment.php">
<?php
} else {
    $_SESSION['status'] = "failed To Payment";
    $_SESSION['status_code'] = "error";
    // echo "<script>alert('No Update Admin Record');</script>";
}

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