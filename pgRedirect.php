<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$server="localhost";
$susername="root";
$spassword="";
$databasename="gym";
$conn=mysqli_connect($server,$susername,$spassword,$databasename);

$ORDER_ID=$_POST['ORDER_ID'];
$username=$_POST['username'];
$planname = $_POST['planname'];
$duration = $_POST['duration'];
$oid = $_POST['oid'];
$names = $_POST['name'];
$TXN_AMOUNT=$_POST['TXN_AMOUNT'];
// $duration = $_GET['duration'];
$payment_type='Online';



// $reset_token=bin2hex(random_bytes(16));
// $_SESSION['resettoken']=$reset_token; //for reset password


if(!$conn)
{
	echo'database not connect';
}
else
{
// 	date_default_timezone_set("Asia/Calcutta");
// $current_date = date("Y-m-d h:i:sa");
	
	$sql="INSERT INTO `txn`( `ordernewid`,`username`,`planname`, `amount`,`duration`) VALUES ('$oid','$username','$planname','$TXN_AMOUNT','$duration')";
	$insert=mysqli_query($conn,$sql);
	 $checkoutplane="INSERT INTO   `checkoutplane` (`orderid`,`order_new_id`,`name`,`username`,`selected_plan`,`txn_amount`,`duration`,`payment_type`) VALUES ('$ORDER_ID', '$oid','$names', '$username', '$planname','$TXN_AMOUNT','$duration','$payment_type')";
	 $binsert=mysqli_query($conn,$checkoutplane);
}

// $ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "http://localhost/gym/pgResponse.php";

/*
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>