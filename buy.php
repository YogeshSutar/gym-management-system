<?php
session_start();
$server = "localhost";
$susername = "root";
$spassword = "";
$databasename = "gym";
$conn = mysqli_connect($server, $susername, $spassword, $databasename);


// $username = $_SESSION['username'];
// // $planname;
// // $orderid=$_GET['orderid'];
// // echo $orderid;


// $search = "SELECT * from `txn` where `username`='$username' ";
// $insertt = mysqli_query($conn, $search);
// while($data = mysqli_fetch_array($insertt)){
//     $planname = $data['planname'];
// }


// $planname=$_GET['planname'];

// $sql = "INSERT into plan_user values('NULL','$username','$planname')";
// $insert = mysqli_query($conn, $sql);

// // $totals = mysqli_num_rows($insert);
// // echo $totals;
// $sql = "DELETE FROM `txn` WHERE `username`='$username'";
// $insert = mysqli_query($conn, $sql);
// // header('location:fitness.php');



$username=$_SESSION['username'];
$oid=$_POST['oid'];
// $username=$_SESSION['username'];
$planname="";
$duration="";

// $orderid=$_GET['orderid'];
// echo $orderid;
$search="SELECT * from `txn` where `username`='$username'";
$insertt=mysqli_query($conn,$search);
$total = mysqli_num_rows($insertt);
echo $total; 
while($data = mysqli_fetch_array($insertt)){
    $planname = $data['planname'];
    $duration = $data['duration'];
    
}

$userss = "SELECT * FROM `checkoutplane` where `username`='$username' || `order_new_id`='$oid'" ;
$importdatausers = mysqli_query($conn, $userss);
while ($data = mysqli_fetch_assoc($importdatausers)) {
    // echo $row['category_id'];
    // $username = $_SESSION['username'];
    $name = $data['name'];
}
 


$_SESSION["duration"] = $duration;
$_SESSION["start_time"] = date("Y-m-d H:i:s");

$end_time = date('Y-m-d H:i:s', strtotime('+' . $_SESSION["duration"] . 'minutes', strtotime($_SESSION["start_time"])));
date_default_timezone_set("Asia/Calcutta");
$current_date = date("Y-m-d h:i:sa");
// $date=strtotime("+3 Months");

$querydublicate = "SELECT COUNT(`username`) FROM `plan_user` WHERE `username`= '$username'";
$run_querydublicate = mysqli_query($conn,$querydublicate);
$count = mysqli_fetch_array($run_querydublicate);
if($count[0]==0){
    $_SESSION['end_time'] = $end_time;
    $sql="INSERT INTO `plan_user` (`name`,`username`,`plan_name`,`duration`,`end_time`) VALUE('$name','$username','$planname','$duration',CURRENT_TIMESTAMP + INTERVAL '$duration' minute)";
     $insert=mysqli_query($conn,$sql);    
}
else{
    $query_update ="UPDATE `plan_user` SET `plan_name`='$planname' , `duration`='$duration' , `date_time` = CURRENT_TIMESTAMP , `end_time`=CURRENT_TIMESTAMP + INTERVAL '$duration' minute  WHERE `username`='$username';"; 
    $run_insert =mysqli_query($conn,$query_update);    
}



//   $checkoutplane = "UPDATE `checkoutplane` SET `status`='$status' where `order_new_id`='$oid'";
//   $binsert = mysqli_query($conn, $checkoutplane);
  
// $sql="DELETE FROM `txn` WHERE `username`='$username'";
// $insert=mysqli_query($conn,$sql);
// $sqlb = "SELECT * FROM `plan_user` where `username`='$username' && `plan_name`='$planname' &&`duration`='$duration'";
// $insertb = mysqli_query($conn, $sqlb);


// while ($date_time = mysqli_fetch_assoc($insertb)) {
//     $start_date_time =  $date_time['date_time'];
//     $end_date_time = $date_time['end_time'];

    // echo $start_date_time;
    // echo '<br>';
    // echo $end_date_time;
    // echo '<br>';

    // $date = date('2022-12-11');
    // $time = date('12:35:00');
    // $date_end = $end_date_time;
    // $date_start = $start_date_time;

    // echo "It will run till " . $date_end;
    ?>
    <script type="text/javascript">
        //set the date we are counting down to
        // var count_id = "<?php echo $date_end; ?>";
        // var countDownDate = new Date(count_id).getTime();
        // //Update the count down every 1 second
        // var x = setInterval(function() {
        //     var count_start = "<?php echo $date_start; ?>";
        //     //Get today's date and time
        //     var now = new Date().getTime(count_start);
        //     //Find the distance between now and the count down date
        //     var distance = countDownDate - now;

        //     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        //     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        //     var time = document.getElementById('adisplaydemo').innerHTML = days + " Days " + hours + " Hr " + minutes + " Min " + seconds + " Sec ";
        //     console.log(time);
        //     sessionStorage.setItem("time",time);

        //     //Time calculations for day, hours, minutes and
        //     if (distance < 0) {
        //         clearInterval(x);
        //         document.getElementById('adisplaydemo').innerHTML = "Expired";
        //     }
        // }, 1000);
        </script>
        <?php
        // $passingdata = $_COOKIE['selectdetail'];
        // echo $passingdata;
        // $startrealtimer = $_GET['startrealtimer'];
        // echo $startrealtimer;
        ?>
        <!-- <form action="" method="post">
            <p id="adisplaydemo" name="startrealtimer"style="font-size:20px; position:fixed; color:black;"> </p>
            </form> -->
  <?php
// }
header('location:fitness.php?duration='.$duration.'');


?>



<!-- <div id="response" style="color:red;">  </div> -->
                    <!-- <script>
                        setInterval(function() {
                            var xmlhttp = new XMLHttpRequest();
                            // console.log('hello')
                            xmlhttp.open("GET","response.php", false);
                            xmlhttp.send(null);
                            document.getElementById("response").innerHTML = xmlhttp.responseText;
                            var firstname=document.getElementById("response").value;
                            localStorage.setItem("textvalue",firstname)

                        }, 1000);
                    </script> -->
                      



                      <!-- SELECT TIMEDIFF(CURRENT_TIMESTAMP,`date_time`) FROM `plan_user`; -->




                      <!-- SELECT CURRENT_TIMESTAMP - (SELECT `date_time` FROM `plan_user` WHERE `username`='Yogesh@123' AND `plan_name`='1 Month'); -->

                      <!-- SELECT TIMESTAMPDIFF(MINUTE,CURRENT_TIMESTAMP,`date_time`) FROM `plan_user`; -->
                    
                      <!-- SELECT TIMESTAMPDIFF(MIX -->

                      <!-- SELECT TIMESTAMPDIFF(MINUTE,LogOutTime,LogInTime) AS TimeLoggedIn
FROM LogTable -->


<!-- SELECT ADDTIME("date_time", INTERVAL 10 DAY) FROM `plan_user` WHERE `plan_name`='3 Month'; -->


<!-- UPDATE `plan_user` SET `end_time`= CURRENT_TIMESTAMP + INTERVAL 10 Day WHERE `plan_name`='3 Month'; -->