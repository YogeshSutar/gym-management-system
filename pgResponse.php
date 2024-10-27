<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require("alert.php");

// database connaection
$server = "localhost";
$susername = "root";
$spassword = "";
$databasename = "gym";
$conn = mysqli_connect($server, $susername, $spassword, $databasename);

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if ($isValidChecksum == "TRUE" ) {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		// echo "<script>consloe.log('hello');</script>";
		
		// $sqlb = "SELECT * FROM `plan_user`";
		// $insertb = mysqli_query($conn, $sqlb);
		// $noOfRowsb = mysqli_num_rows($insertb);
		// if ($noOfRowsb > 0) {
			// $search="SELECT * from `txn` where `username`='$username'";
			// $insertt=mysqli_query($conn,$search);
			// $total = mysqli_num_rows($insertt);
			// echo $total; 
			// while($data = mysqli_fetch_array($insertt)){
			// 	$planname = $data['planname'];
			// 	$duration = $data['duration'];
				
			// }
		$status = $_POST["STATUS"];
		$order = $_POST['ORDERID'];
		// $duration = $_POST["duration"];
		// $reset_token = $_POST['resettoken'];
		$sqlfe = "SELECT * FROM `checkoutplane`";
		$importdata = mysqli_query($conn, $sqlfe);
		while ($data = mysqli_fetch_assoc($importdata)) {
			$oid = $data['order_new_id'];
			$name = $data['name'];
		}
		$orderidid = $order;
		echo $orderidid;
		echo '<form method="GET" > 
		<input type="text" name="ordid" value="'.$order.'" >
		</form>';
		// echo $oida;
		// }

		$sql = "UPDATE `txn` SET `status`='$status'  WHERE `ordernewid`='$oid'";
		// $sqli="INSERT INTO `txn`(`status`) VALUES ('$oid')";
		$insert = mysqli_query($conn, $sql);
		// $planname=$data['plan_name'];
		// $sql="INSERT into `plan_user` values('NULL','$username','$planname')";
		//  $insert=mysqli_query($conn,$sql);
		$checkoutplane = "UPDATE `checkoutplane` SET `status`='$status',`orderid`='$orderidid' where `order_new_id`='$oid'";
		// $checkoutplane1="INSERT INTO `checkoutplane` `orderid`='$order',`status`='$status' where `order_new_id`='$oid'";
		$binsert = mysqli_query($conn, $checkoutplane);
		// $as = mysqli_num_rows($binsert);
		// echo $as;	

		header("location:buy.php?duration='.$duration.'&oid='.$oid.'name='.$name.'");
		
		
		// here content
		
		// $order = $_POST['ORDERID'];
		// $status = $_POST["STATUS"];
		// $planname = $_POST['planname'];
		// $username = $_POST['username'];
		
		// // $username=$_POST['username'];
		// $checkoutplane = "UPDATE `checkoutplane` set `status`='$status' where `	username`='$username'";
		// $binsert = mysqli_query($conn, $checkoutplane);

		
		// $sql = "UPDATE `txn` SET `status`='$status'  WHERE `username`='$username'";
		// $insert = mysqli_query($conn, $sql);

		// $planname = $data['planname'];

		// $sql = "INSERT into `plan_user` values('NULL','$username','$planname')";
		// $insert = mysqli_query($conn, $sql);


		// buy page content

		// $search = "SELECT * from `txn` where `username`='$username'";
		// $insertt = mysqli_query($conn, $search);
		// $data = mysqli_fetch_assoc($insertt);

		// $planname = $data['plan_name'];


		// $sql = "INSERT into plan_user values('NULL','$username','$planname')";
		// $insert = mysqli_query($conn, $sql);

		// $sql = "DELETE FROM `txn` WHERE `username`='$username'";
		// $insert = mysqli_query($conn, $sql);
		// header('location:./fitness.php');


		//  header ("location:buy.php?orderid=.$orderid");
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	} 
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		$order = $_POST['ORDERID'];
		$status = $_POST["STATUS"];
	

		$fstatus = "TXN_FAILURE";
		$order = $_POST['ORDERID'];
		// $duration = $_POST["duration"];
		// $reset_token = $_POST['resettoken'];
		$sqlfe = "SELECT * FROM `checkoutplane`";
		$importdata = mysqli_query($conn, $sqlfe);
		while ($data = mysqli_fetch_assoc($importdata)) {
			$oid = $data['order_new_id'];
		}
// $payment_type = 'online';
		
		$checkoutplane = "UPDATE `checkoutplane` SET `status`='$fstatus',`orderid`='$order' where `order_new_id`='$oid'";
		$binsert = mysqli_query($conn, $checkoutplane);
		
		header("location:fitness.php");
	
		// if(isset($_POST['submit'])){
		// 	header('location:fitness.php');
		// }
		
		// echo 
        // '<input type="submit" value="Continue to checkout" class="btn" name="submit">';


		// $sql = "UPDATE `txn` SET `status`='$status'  WHERE `username`='$username'";
		// $insert = mysqli_query($conn, $sql);
		// $planname=$data['plan_name'];
		// $sql="INSERT into `plan_user` values('NULL','$username','$planname')";
		//  $insert=mysqli_query($conn,$sql);
		// $checkoutplane = "UPDATE `checkoutplane` set `status`='$status' where `resettoken`='$reset_token'";
		// $binsert = mysqli_query($conn, $checkoutplane);
		// // $as = mysqli_num_rows($binsert);
		// // echo $as;	

		// header("location:buy.php?resettoken=.$reset_token");
		// }
	// 	$_POST["STATUS"] == "TXN_FAILED";
	// 	$order = $_POST['ORDERID'];
	// 	$status = $_POST["STATUS"];


	// 	$sql = "UPDATE `txn` SET `status`='$status'  WHERE `orderid`='$order'";
	// 	$insert = mysqli_query($conn, $sql);

	// 	$checkoutplane = "UPDATE `checkoutplane` set `status`='$status' where `orderid`='$order'";
	// 	$binsert = mysqli_query($conn, $checkoutplane);
		
	// 	header("location:buy.php?orderid=.$id");
	
}

	if (isset($_POST) && count($_POST) > 0) {
		foreach ($_POST as $paramName => $paramValue) {
			echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
} else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
