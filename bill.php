<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}


</style>

</head>

<?php

require('dbconnect.php');

if(!$conn)
{
	echo'database not connect';
}
else
{
  // This Submit Button For Go Back To Fitness Page

if(isset($_POST['submit'])){
    header('location:fitness.php');
}

session_start();
$username=$_SESSION['username'];
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
   if($total!=0){
   while($data = mysqli_fetch_assoc($importdata)){
        
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
  }
  }

if(!empty($_POST['print'])){
    // $username=$_POST['username'];
	// 	$order = $_POST['ORDER_ID'];
	// 	$planname = $_POST["planname"];
	// 	$price = $_POST["price"];
        


}


?>
<body>

<h2>Responsive Checkout Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Username</label>
            <input type="text" id="fname" name="username" value="<?php  echo $username;?>">
            <label for="fname"><i class="fa fa-user"></i> Order Id</label>
            <input type="text" id="fname" name="ORDER_ID" value="<?php  echo $order_new_id;?>">
            <div class="col-50">
              <h3>Plan</h3>
              <input type="text" id="expmonth" name="planname" value="<?php  echo $plan;?>">
            </div>
          <div class="col-50">
            <h3>Payment</h3>
            <label for="expmonth">  </label>
            <input type="text" id="expmonth" name="price" value="<?php  echo $price;?>">
          </div>
          <div class="col-50">
            <h3>status</h3>
            <label for="expmonth">  </label>
            <input type="text" id="expmonth" name="TXN_STATUS" value="<?php  echo $status;?>">
          </div>
          <div class="col-50">
            <h3>Duration</h3>
            <label for="expmonth">  </label>
            <input type="text" id="expmonth" name="TXN_STATUS" value="<?php  echo $duration;?>">
          </div>
        <input type="submit" value="Print" class="btn" onclick="window.print()" name="print">
        <input type="submit" value="Go To The Home Page" class="btn" name="submit">



      </form>
    </div>
  </div>
</div>

</body>
</html>
