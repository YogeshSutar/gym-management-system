<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Merchant Check Out Page</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
</head>

<body>
    <?php
    // session_start();
    // // require_once('secondplan.php');
    
    // if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        //         $threeplan = $_SESSION['threeplan'];
        //     }        
    require_once('dbconnect.php');
    $username=$_GET['username'];
    $planname=$_GET['planname'];
	$price;
	$sql="SELECT * FROM `plan` where `plan_name`='$planname'";
	$insert=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_assoc($insert))
	{
		$price=$data['price'];
	}

    ?>
    <h1>Merchant Check Out Page</h1>
    <pre>
	</pre>
    <form method="post" action="pgRedirect.php">
        <table border="1">
            <tbody>
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label>ORDER_ID :</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label>Username :</label></td>
                    <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="username" autocomplete="off" value="<?php echo $username ?>"></input></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td><label>Selected Plan :</label></td>
                    <td>
                    <input id="plan" tabindex="3" maxlength="12" size="12" name="planname" autocomplete="off"
                     value="<?php  echo $planname; ?>">

                    </input>
                </td>
                </tr>

                <!-- <tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr> -->
                <!-- <tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr> -->
                <tr>
                    <td>4</td>
                    <td><label>Amount :</label></td>
                    <td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $price; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input value="CheckOut" type="submit" onclick=""></td>
                </tr>
            </tbody>
        </table>

    </form>
</body>



<!-- //     $sql = "SELECT `plan_name`,`price` FROM `plan` WHERE id='1'";
    //     $insert = mysqli_query($conn, $sql);
    //     $alldata = array();
    //     while ($data = mysqli_fetch_assoc($insert)) {
    //         echo "<br>";
    //         $planname = $data['plan_name'];
    //         $price = $data['price'];
    //         $alldata[] =$data; 
    //         var_dump($data);
    //         echo json_encode($data);
    //         // mysqli_close($conn);
    //     }
    // }
    
    // if (isset($_POST['joinbtn2'])|| isset($_SESSION['username'])) {

    //     $sql = "SELECT `plan_name`,`price` FROM `plan` WHERE id='2'";
    //     $insert = mysqli_query($conn, $sql);
    //     while ($data = mysqli_fetch_assoc($insert)) {
    //         echo "<br>";
    //         $username = $_SESSION['username'];
    //         $planname = $data['plan_name'];
    //         $price = $data['price'];
    //         echo json_encode($data);
    //     }
    // }

    // function firstjoinbtn(){

    //     $server="localhost";
    //     $susername="root";
    //     $spassword="";
    //     $databasename="gym";
    //     $conn=mysqli_connect($server,$susername,$spassword,$databasename);
         
    //     $sqliget = "SELECT `plan_name`,`price` FROM `plan` WHERE id='1'";
    //     $sqligetcon = mysqli_query($conn,$sqliget);
    //     while($data = mysqli_fetch_assoc($sqligetcon)){
    //         if(isset($_POST['joinbtn1'])){
    //         echo json_encode($data);
    //         }
    //     }
    // }
    // firstjoinbtn();


    // function secondjoinbtn(){

    //     $server="localhost";
    //     $susername="root";
    //     $spassword="";
    //     $databasename="gym";
    //     $conn=mysqli_connect($server,$susername,$spassword,$databasename);
         
    //     $sqliget = "SELECT `plan_name`,`price` FROM `plan` WHERE id='2'";
    //     $sqligetcon = mysqli_query($conn,$sqliget);
    //     while($data = mysqli_fetch_assoc($sqligetcon)){

    //         echo json_encode($data);
    //     }
    // }
    // secondjoinbtn();

    // echo $_POST['joinbtn2'];




    //         $sqlfe = "SELECT * FROM `plan` WHERE  `plan_name`='$planname' and `price`='$price'";
    //         $importdata = mysqli_query($conn, $sqlfe);
    //          $sqlb = "SELECT * FROM `plan_user` where  `username`='$username'";
    //          $insertb = mysqli_query($conn, $sqlb);
    //          $noOfRowsb = mysqli_num_rows($insertb);
    //         if(isset($data =mysqli_fetch_assoc($insert))){

    //         // }
    //         // echo mysqli_num_rows($importdata);
    //         $noOfRows = mysqli_num_rows($importdata);
    //         $firstplan = "SELECT `plan_name` FROM `plan` WHERE id='1'";
    //         $firstplanresult = mysqli_query($conn, $firstplan);
    //         while ($norfp = mysqli_fetch_assoc($firstplanresult)) {
    //         }
    //     }

    //     // if ($noOfRows > 0) {
    //     //     // $row = mysqli_fetch_assoc($insert);
    //     //     // print_r($row);
    //     //     // $row = mysqli_fetch_assoc($insert);
    //     //     // print_r($row);
    //     //     // $row = mysqli_fetch_assoc($insert);
    //     //     // print_r($row);
    //     //     while ($noOfRows = mysqli_fetch_array($insert)) {
    //     //         //    echo $noOfRows[0];
    //     //         // $firstplan = $noOfRows[0];
    //     //         // $secondplan = $noOfRows[1];
    //     //         // $thirdplan = $noOfRows[2];
    //     //         // $fourthplan = $noOfRows[3];
    //     //         //    $fifthplan = $noOfRows[4];

    //     //         // echo '' . $firstplan . ',' .  $secondplan . ',' . $thirdplan . ',' . $fourthplan;
    // }
    // //         }



    // $firstplan = "SELECT `plan_name` FROM `plan` WHERE id='1'";
    // $firstplanresult = mysqli_query($conn, $firstplan);
    // while($norfp = mysqli_fetch_assoc($firstplanresult)){
    //     echo "your plan is ".$norfp;
    // } -->

</html>






























