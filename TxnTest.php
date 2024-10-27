<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");


$server = "localhost";
$susername = "root";
$spassword = "";
$databasename = "gym";
$conn = mysqli_connect($server, $susername, $spassword, $databasename);
session_start();
// $reset_token=bin2hex(random_bytes(16));
// $reset_token = $_SESSION['resettoken'];
// // $reset_token=$_POST['resettoken'];
// $sq = "SELECT * FROM `checkoutplane` where `resettoken`='$reset_token'";
// $insertb = mysqli_query($conn, $sq);
// // $as=mysqli_num_rows($insertb);
// $orderid ="ORDS". rand(10000, 99999999);
	// if(isset($_POST['submitbtn'])){

	// 	$order_id=$_POST['ORDER_ID']; 
	// $sql="INSERT INTO `checkoutplane` (`orderid`) VALUES ('$order_id')";
					
	//                 $result=mysqli_query($conn,$sql);
	//                 if($result)
	//                 {
	// 					//   session_start();
	// 					$_SESION['ORDER_ID']=$order_id;
	// 				  echo "<script>
	// 				 console.log('asd hello'); 
	// 				  alert('asdasd');</script>";
	// 				}
	// 			}
$username = $_GET['username'];
$planname = $_GET['planname'];
$duration = $_GET['duration'];
$oid = $_GET['oid'];
$name = $_GET['name'];
$price;
$sql = "SELECT * FROM `plan` where `plan_name`='$planname'";
$insert = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($insert)) {
	
	$price = $data['price'];
}
// if(isset($_POST['submitbtn'])){
//     $orderidinsert = $_POST['ORDER_ID'];
// 	// $orderid ="ORDS". rand(10000, 99999999);


//     $addquery = "INSERT INTO `checkoutplane`(`orderid`) VALUES ('$orderidinsert')";

//     $addresult = mysqli_query($conn,$addquery);
// }
// $sqlb2 = "SELECT * FROM `checkoutplane` where `resettoken`='$reset_token'";
// $insertb = mysqli_query($conn, $sqlb2);
// $as=mysqli_num_rows($insertb);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Merchant Check Out Page</title>
	<meta name="GENERATOR" content="Evrsoft First Page">
	<link rel="stylesheet" href="allcss/TxnTest.css">
</head>
<style>
	/* .datatable{
	margin-left: auto;
  margin-right: auto;
border: 2px solid red;
background-color: rgba(41, 41, 41, 0.592);
border-radius: 8px;

	
} */
</style>

<body style="background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(images/txntestphoto.jpg) no-repeat center; background-size: cover;width:100%; height:100%; background-attachment:fixed; ">
	<div>

		<!-- <header "> -->


		<h1 class="txnheader">Merchant Check Out Page</h1>

		<form method="post" action="pgRedirect.php">
			<section>
				<table class="maintxnbox">
					<!-- <div class="subtxnbox"> -->
					<tr class="subtxnbox" style="display: none;">
						<td class="headnames" >
							Order ID :

						</td>
						<td >
							<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'."ORDS". rand(10000, 99999999).'</p>' ?>
							<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo "ORDS". rand(10000, 99999999) ?>">
						</td>
					</tr>
					
										<!-- <tr class="subtxnbox">
						<td class="headnames">
							Order ID :
						</td>	
						<td >
							<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$orderid.'</p>' ?>
							<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $orderid ?>">
						</td>
					</tr> -->

					<!-- </div> -->

					<input style="display:none;" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
					<input style="display:none;" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
					<input style="display:none;" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

					<!-- <div class="subtxnbox"> -->

					<!-- New Order ID generate -->

						<tr class="subtxnbox">
							<td class="headnames">
							Order ID :
							</td>
							<td>
							<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$oid.'</p>' ?>
								<input type="hidden" id="oid" tabindex="2" maxlength="12" size="12" name="oid" autocomplete="off" value="<?php echo $oid ?>"></input>
							</td>
						</tr>
						<!-- name -->
						<tr class="subtxnbox" style="display: none;">
							<td class="headnames">
							Name :
							</td>
							<td>
							<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$name.'</p>' ?>
								<input type="hidden" id="name" tabindex="2" maxlength="12" size="12" name="name" autocomplete="off" value="<?php echo $name ?>"></input>
							</td>
						</tr>
					<!-- Username -->

					<tr class="subtxnbox">
						<td class="headnames">
							Username :
						</td>
						<td>
						<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$username.'</p>' ?>
							<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="username" autocomplete="off" value="<?php echo $username ?>"></input>
						</td>
					</tr>					
<!-- duration -->
					<tr class="subtxnbox">
						<td class="headnames">
							duration :
						</td>
						<td>
						<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$duration.'</p>' ?>
							<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="duration" autocomplete="off" value="<?php echo $duration ?>"></input>
						</td>
					</tr>
					<!-- </div> -->
					<!-- <div class="subtxnbox"> -->
					<tr class="subtxnbox">
						<td class="headnames">

							Selected Plan :
						</td>
						<td>
						<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$planname.'</p>' ?>
							<input type="hidden" id="plan" tabindex="3" maxlength="12" size="12" name="planname" autocomplete="off" value="<?php echo $planname; ?>"></input>
						</td>
					</tr>
					<!-- </div> -->
					<!-- <div class="subtxnbox"> -->
					<tr class="subtxnbox">
						<td class="headnames">

							Amount :
						</td>
						<td>
						<?php echo '<p style="color:white; font-weight:bold; font-size:31px;">'.$price.'</p>' ?>

							<input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $price; ?>">
						</td>
					</tr>
					<!-- </div> -->

					<!-- <div class="subtxnbox"> -->
					<tr >
						<td class="submittxnbutton">

							<input value="CheckOut" type="submit" name="submitbtn" class="innersubmittxn">
						</td>
					</tr>
					<!-- </div> -->
				</table>
			</section>
			</table>

			<!-- * - Mandatory Fields -->
		</form>
	</div>
</body>

</html>