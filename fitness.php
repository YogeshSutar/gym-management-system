<?php
session_start();

require_once('dbconnect.php');
if (!$conn) {
    echo 'database not connect';
} else {
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

    //     $sqliget = "SELECT `plan_name`,`price` FROM `plan` WHERE id='1'";
    //     $sqligetcon = mysqli_query($conn,$sqliget);
    //     while($data = mysqli_fetch_assoc($sqligetcon)){

    //         echo json_encode($data);
    //     }
    // }
    // secondjoinbtn();
}


// if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
//     $url ="https://";
// }
// else{
//     $url="http://";
//     $url.=$_SERVER['HTTP_HOST'];
//     $url.=$_SERVER['REQUEST_URI'];
//     $url;
// }
// $psge=$url;
// $sec="10";


// else {
//     if (isset($_POST['joinbtn1'])|| isset($_SESSION['username'])) {
//         $sqliget = "SELECT * FROM `plan`";
//         $sqligetcon = mysqli_query($conn,$sqliget);
//         while(mysqli_fetch_assoc($sqligetcon)){
//             // print_r($sqligetcon);    
//             $noOfRows = mysqli_num_rows($sqligetcon);
//             if ($noOfRows > 0) {
//                         $noOfRows = mysqli_fetch_assoc($sqligetcon);
//                         print_r($noOfRows);
//             }
//                         echo var_dump($sqligetcon);
//             // echo mysqli_num_rows($$sqligetcon);
//         }   
//     }
// }

// $sql = ;


// $firstdatafetch = mysqli_query($conn, "SELECT `plan_name`,`price` FROM `plan` WHERE id='1'");
// $seconddatafetch = mysqli_query($conn, "SELECT `plan_name`,`price` FROM `plan` WHERE id='2'");
// $thirddatafetch = mysqli_query($conn, "SELECT `plan_name`,`price` FROM `plan` WHERE id='3'");
// $_SESSION['threeplan']=$threeplan;

// if (isset($_POST['firstjoinbtn'])) {
//     $threemonthplan = $_POST['threemonthplan'];
// }
?>



<!-- <script>
    debugger;
    var ajax = new XMLHttpRequest();
    var method = "POST";
    var url = "orderpay.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);

    ajax.send();

    ajax.onreadystatechange = function() {
        if (this.readystate == 4 && this.state == 200) {
            alert(this.responseText2);
        }
    }
</script> -->
<!-- <script>
setTimeout(() => {
    location.reload();
}, 10000);
</script> -->
<style>
    .pleaseloginfirst {
        font-size: 15px;
        color: white;
        text-decoration: none;
        transition: 0.3s;
        letter-spacing: 0.5px;
    }

    .pleaseloginfirst:hover {
        color: AliceBlue;
        text-decoration: none;
        letter-spacing: 2px;

    }

    .access_text {
        color: #ffd579d8;
        font-weight: bold;
        background: none;
        font-size: 16px;
    }

    /* .print_bill{
        color: red;
    } */
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta http-equiv="refresh" content="<?php echo $sec;?>" URL="<?php echo $page;?>"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="allcss/fitness.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<?php
include "nav.php"
?>

<body>
    <div>
        <header class="silder" style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.4)),url(images/fitness.jpg) no-repeat center;     background-size: cover;">
            <div class="imageheader">
                Do It For The <spam id="headerafter" style="color:red;">"AFTER"</spam> Picture
            </div>
    </div>

    <div class="main_img_info">
        <h1 class="titleworkout"> Did You Know About It
            <hr style="margin: 465px; margin-top: 20px; margin-bottom: 10px; color:white; height:3px;">
        </h1>

        <!-- image left to right -->
        <div class="sub_img_info">
            <div class="left_img">
                <img class="left_right_img" src="images/left_right/backimage.jpg" alt="backimage">
            </div>
            <div class="right_info">
                <h1>Back Exercise</h1>
                <p>When you crack your exercise toolkit open each week on back day, you've got a seemingly endless array
                    of movements available. If you're overwhelmed by the sheer number of row variations, or you draw a
                    total blank when thinking of new exercises to try, consider this list your new back blueprint.<br>
                    Here are the best back exercises for muscle growth, plus three complete back workouts incorporating
                    the movements that you can plug into your split right away.</p>
            </div>
        </div>
        <hr style="height:3px; color:white;">

        <!-- image right to left  -->
        <div class="sub_img_info">
            <div class="left_info">
                <h1>Shoulder Exercise</h1>
                <p>The way lifters train their shoulders is usually a balance of personal taste and injury history.<br>
                    If you've read the other articles in the 10 Best series, you know we favor a little of both: a heavy
                    muscle-building move like a press to start, followed by targeted isolation work after. This approach
                    is a time-tested way to build the best shoulder workouts for both men and women.<br>
                    You'll find enough variations of each movement below to keep you busy for a long time. Read up, eat
                    to grow, then get to work with the three complete workouts below!
                </p>
            </div>
            <div class="right_img">
                <img class="left_right_img" src="images/left_right/shoulderimage.jpg" alt="shoulderimage">
            </div>
        </div>
        <hr style="height:3px; color:white;">

        <!-- image left to right -->
        <div class="sub_img_info">
            <div class="left_img">
                <img class="left_right_img" src="images/left_right/chestimage.jpg" alt="chestimage">
            </div>
            <div class="right_info">
                <h1>Chest Exercise</h1>
                <p>There are dozens of exercises you could do on chest day but you probably don't want to spend your
                    Monday—taka International Chest Day—doing
                    them all. You just want to know the best exercises to build a muscular chest, so we've done the work
                    to compare them for you.<br>
                    Our choices are based on results in the lab, but also the weight room. Serious lifters know that
                    measuring activation from electromyography (EMG) to pick the best muscle-building exercises is
                    helpful, but far from perfect. <br>
                    Along with growth-focused nutrition and supplementation, this can be your action plan for a bigger
                    chest!
                </p>
            </div>
        </div>
        <hr style="height:3px; color:white;">

        <!-- image right to left  -->
        <div class="sub_img_info">
            <div class="left_info">
                <h1>Leg Exercise</h1>
                <p>With so many choices of how to train the lower body, it's no wonder that so many lifters feel
                    overwhelmed and skip leg day entirely. <br>(That's your excuse, right?)<br>
                    This list will give you clarity, but you'll still have to work! Almost across the board, multijoint
                    or "compound" exercises top this list. Why? In addition to recruiting more muscle mass, these
                    exercises generate greater release of the muscle-building hormones testosterone and growth
                    hormone.<br>
                    Build around these movements, and you can create more efficient, effective leg workouts. And with
                    three complete workouts we've included for you, you have no more excuses. Get educated and get to
                    work!
                </p>
            </div>
            <div class="right_img">
                <img class="left_right_img" src="images/left_right/legimage.jpg" alt="">
            </div>
        </div>
        <hr style="height:3px; color:white; ">

        <div class="sub_img_info">
            <div class="left_img">
                <img class="left_right_img" src="images/left_right/bicepsimage.jpg" alt="bicepsimage">
            </div>
            <div class="right_info">
                <h1>Biceps Exercise</h1>
                <p>Over the years, a number of studies have sought to investigate the best biceps exercises. This
                    shouldn't surprise you! You know the first thing you'd do if you ever got access to an EMG
                    machine<br>
                    would be to hook it up to your guns. Be honest.
                    So, what's the winner? Based on biceps EMG alone, it's usually the concentration curl, a staple in
                    the bodybuilding regimens of golden-era lifters like Arnold Schwarzenegger and Lou Ferrigno. But
                    here's the catch: We've never met a single bodybuilder who whole-heartedly agreed.<br>
                    Why not? For one, experienced lifters know that while muscle activation matters, it isn't the only
                    thing that determines the best muscle-building exercises.<br>
                    You don't have to consider this a definitive list. Take it as the start of the discussion, then go
                    experiment for yourself in workouts!
                </p>
            </div>
        </div>
        <hr style="height:3px; color:white;">

        <div class="sub_img_info">
            <div class="left_info">
                <h1>Triceps Exercise</h1>
                <p>The triceps make up roughly two-thirds of your upper arm, so if you want bigger arms, building your
                    tris is a must. The problem is, every lifter has a different approach. Some simply perform all
                    manner of push-downs, while others spend an hour parked at the dumbbell rack. Which is better? Well,
                    it depends on what move you're trying to do there.<br> You can also put these moves into action with
                    the full workouts. <br> Pair one with the best
                    chest exercises on Monday, <br>then another with biceps on Friday. Just don't forget to eat and
                    supplement for growth, too!
                </p>
            </div>
            <div class="right_img">
                <img class="left_right_img" src="images/left_right/tricepsimage.jpeg" alt="tricepsimage">
            </div>
        </div>
    </div>

    <hr style="height:1px; color:white ; margin-top :0px; ">



    <!-- get fitnesss join gym   -->
    <div class="iconcard">
        <h1 class="getfitness"> Get Fitness
            <hr style="margin: 605px;
    margin-top: 20px; margin-bottom: 10px; color:white; height:3px;">
        </h1>
        <div class="iconinfo">
            <div class="icons">
                <i class="fa fa-play fa-3x"></i>
                <h1>Buy Now</h1>
                <p>Start Anytime</p>
            </div>
            <div class="icons">
                <i class="fa fa-solid fa-person-running fa-3x"></i><br>
                <h1>Pause</h1>
                <p>Pack Anytime</p>
            </div>
            <div class="icons">
                <i class="fa fa-sharp fa-solid fa-shield-halved fa-3x"></i><br>
                <h1>Safest</h1>
                <p>GYM in town</p>
            </div>
        </div>
        <script>
                        //     $(document).ready(function(){
                        //         setInterval(function(){
                        //             $("autodata").load("fitness.php");
                        //             refresh();
                        //         },10000);
                        //     });
                        // </script>
                         <!-- <div id="autodata"></div> -->
        <?php
        // if (isset($_SESSION['username'])) {

        // $sql = "SELECT * FROM `plan`";
        // $insert = mysqli_query($conn, $sql);

        // while ($data = mysqli_fetch_assoc($insert)) {
        //     $username = $_SESSION['username'];
        //     $planname = $data['plan_name'];
        //     $price = $data['price'];
        //     $sqlfe = "SELECT * FROM `plan` WHERE  `plan_name`='$planname' and `price`='$price'";
        //     $importdata = mysqli_query($conn, $sqlfe);
        //     $sqlb = "SELECT * FROM `plan_user` where  `username`='$username'";
        //     $insertb = mysqli_query($conn, $sqlb);
        //     $noOfRowsb = mysqli_num_rows($insertb);
        // $noOfRowsb = mysqli_num_rows($importdata);
        // }

        ?>



        <?php
        // $username = $_SESSION['username'];
        // // $planname = $_POST[]
        // $query_countdown = "SELECT * FROM `plan_user` WHERE `username`= '$username'";
        // $query_countdown_run = mysqli_query($conn, $query_countdown);
        // while ($date_time = mysqli_fetch_assoc($query_countdown_run)) {
        //     $start_date_time =  $date_time['date_time'];
        //     $end_date_time = $date_time['end_time'];
        // }
        // echo $start_date_time;
        // echo '<br>';
        // echo $end_date_time;
        // echo '<br>';

        // $date = date('2022-12-11');
        // $time = date('12:35:00');
        // $date_end = $end_date_time;
        // $date_start = $start_date_time;

        // echo "It will run till " . $date_end;
        // 
        ?>
        <script type="text/javascript">
            //     //set the date we are counting down to
            //     var count_id = "<?php echo $date_end; ?>";
            //     var countDownDate = new Date(count_id).getTime();
            //     //Update the count down every 1 second
            //     var x = setInterval(function() {
            //         var count_start = "<?php echo $date_start; ?>";
            //         //Get today's date and time
            //         var now = new Date().getTime(count_start);
            //         //Find the distance between now and the count down date
            //         var distance = countDownDate - now;

            //         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            //         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            //         var time = document.getElementById('displaydemo').innerHTML = days + " Days " + hours + " Hr " + minutes + " Min " + seconds + " Sec ";
            //         //Time calculations for day, hours, minutes and
            //         if (distance < 0) {
            //             clearInterval(x);
            //             document.getElementById('displaydemo').innerHTML = "Expired";
            //         }
            //     }, 1000);
            // 
        </script>
        <?php
        // // echo '   <p id="displaydemo" name="startrealtimer" style="font-size:20px; color:white;">Time : </p>';
        // echo "<p id='displaydemo' style='font-size:40px; color:white;'> </p>"
        // 
        ?>

        <?php

        // $sql = "SELECT * FROM `users`";
        // $userdata = mysqli_query($conn, $sql);
        // while ($userdetail = mysqli_fetch_assoc($userdata)) {
        //     // $phone = $userdetail['phone'];
        //     // $name = $userdetail['name'];
        //     // echo $phone;
        // }  
        // foreach($seconddatafetch as $post) : 
        // $username=$_SESSION['username'];

        if (isset($_SESSION['username'])) {


            $username = $_SESSION['username'];
            $userss = "SELECT * FROM `users` where `username`='$username'";
            $importdatausers = mysqli_query($conn, $userss);
            while ($data = mysqli_fetch_assoc($importdatausers)) {
                // echo $row['category_id'];
                // $username = $_SESSION['username'];
                $name = $data['name'];
            }


            // $name = "";
            // $phone = "";
            // $reset_token = $_SESSION['resettoken'];
            $sqlfe = "SELECT * FROM `plan`";
            $importdata = mysqli_query($conn, $sqlfe);
            $duration = "";
            while ($data = mysqli_fetch_assoc($importdata)) {
                // echo $row['category_id'];
                // $username = $_SESSION['username'];
                $planname = $data['plan_name'];
                $duration = $data['duration'];


                $price = $data['price'];





                $oid = "ORDS" . rand(10000, 99999999);


                $sqlb = "SELECT * FROM `plan_user` where `username`='$username' && `plan_name`='$planname' &&`duration`='$duration' && `end_time` > CURRENT_TIMESTAMP";
                // $fetching_start_date = $_GET['Start_date'];
                // $fetching_end_date = $_GET['end_date'];
                $insertb = mysqli_query($conn, $sqlb);

                $noOfRowsb = mysqli_num_rows($insertb);
                if ($noOfRowsb > 0) {
                    while ($fetching_data = mysqli_fetch_assoc($insertb)) {
                        $start_time_display = $fetching_data['date_time'];    //stat up
                        $end_time_display = $fetching_data['end_time'];    // destination
                    }

                    
                    $asdasd = date_default_timezone_set('Asia/Kolkata');
                    // echo date_default_timezone_get();
                    $current_date = date("Y-m-d H:i:s");
                    $datedate = date($start_time_display);
                        // $current_buy_date = date("Y-m-d h:i:s");
                        // echo $current_buy_date;


                    $current_real_time_date = strtotime($current_date);
                    // echo $current_real_time_date;

                    $exp = strtotime($end_time_display);
                    // echo $exp;
                    if ($current_real_time_date >= $exp) {

                        // echo 'Plan Expired';
                        // $delete_plan_query ="DELETE FROM `plan_user` WHERE `username`='$username' && `plan_name`='$planname' &&`duration`='$duration'";
                        // $run_delete_query = mysqli_query($conn,$delete_plan_query);
                        ?>
                        <!-- <script>
                            $(document).ready(function(){
                                setInterval(function(){
                                    $("autodata").load("fitness.php");
                                    refresh();
                                },10000);
                            });
                        </script>
                        <div id="autodata"></div> -->
                        <?php
                        $notification_status = "plan is EXPIRED"; 
                        date_default_timezone_set('Asia/Kolkata');
                        $insert_date = date("Y-m-d H:i:s");
                        $notification_query = "INSERT INTO `notifications`(`username`, `name`, `info`,`planname`,`expired_plan_date`) VALUES ('$username','$name','$notification_status','$planname','$insert_date')";
                        $add_notification_query = mysqli_query($conn,$notification_query);

                        ?>

                        <?php

                    } else {

                        // echo 'Plan Not Expire';
                    }
                    // $i=1;
                    // while ($date_time = mysqli_fetch_assoc($insertb)) {
                    //     $start_date_time =  $date_time['date_time'];
                    //     $end_date_time = $date_time['end_time'];

                    //     echo $start_date_time;
                    //     echo '<br>';
                    //     echo $end_date_time;
                    //     echo '<br>';

                    //     $date_end = $end_date_time;
                    //     $date_start = $start_date_time;

                    //     
        ?>
                    <script type="text/javascript">
                    //     //set the date we are counting down to
                    //     var count_id = "<?php echo $date_end; ?>";
                    //     var countDownDate = new Date(count_id).getTime();
                    //     //Update the count down every 1 second
                    //     var x = setInterval(function() {
                    //         var count_start = "<?php echo $date_start; ?>";
                    //         //Get today's date and time
                    //         var now = new Date().getTime(count_start);
                    //         //Find the distance between now and the count down date
                    //         var distance = countDownDate - now;

                    //         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    //         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    //         // for(let i=1 ;i<)
                    //         var time = document.getElementById('adisplaydemo<?php echo $i; ?>').innerHTML = sessionStorage.getItem("time", time);
                    //         //    var time = document.getElementById('abdisplaydemo<?php echo $i; ?>').innerHTML = sessionStorage.getItem("time",time);
                    //         // days + " Days " + hours + " Hr " + minutes + " Min " + seconds + " Sec ";

                    //         //Time calculations for day, hours, minutes and
                    //         if (distance < 0) {
                    //             clearInterval(x);
                    //             document.getElementById('adisplaydemo<?php echo $i; ?>').innerHTML = "Expired";
                    //         }
                    //     }, 1000);
                    // </script>

                    <?php

                    //    echo '   <p id="adisplaydemo" style="font-size:20px; color:white;">Time : </p>';
                    //    $startrealtimer = $_POST['startrealtimer'];
                    //    echo $startrealtimer;

                    // $sqlbcount = "SELECT * FROM `plan_user` where `username`='$username'&& `plan_name`='$plan_name'";
                    // $insertbcount = mysqli_query($conn, $sqlb);

                    // $start_real_timer = $_POST['start_real _timer'];
                    // echo $start_real_timer;


                    echo '     
                    <div class="maincards" style="">
                    <div class="subcards">
                    <div class="cardsphase1">
                    
                    <div class="month">

                                <h1>' . $planname . '</h1>
                                <h1 >' . $duration . '</h1>
                                


                                <div id="response" style="color:white;">  </div>
                                </div>
                                <div class="rupees">
                                    <h1>₹ ' . $price . '</h1>
                                    <p>₹ 333 Per Month</p>
                                </div>
                            </div>
                            <div class="cardsphase2">
                                <div>
                                    <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                                </div>
                                <div class="cardinfo">
                                    <ul>
                                        <li>Start Date : ' . $start_time_display . '</li>
                                        <li>End Date : ' . $end_time_display . '</li>
                                        <li> ACCESS TO THIS CLUB </li>
                                        <li> only ₹ 333 for Month </li>

                                        
                                        
                                    </ul>
                                </div>
                                <div class="btnoin">
                                    
                                    <p class="access_text">You Are Now Accessing This Plan</p>
                 <a href="./billp.php?price=' . $price . ' & plan=' . $planname . '" style="text-decoration:none" class="joinnow">Print Bill</a>

                                </div>
                            </div>
                        </div>
                        </div> ';
                    ?>


                    <!-- <script>
                        setInterval(function() {
                            var xmlhttp = new XMLHttpRequest();
                            // console.log('hello')
                            xmlhttp.open("GET","response.php", false);
                            xmlhttp.send(null);
                            document.getElementById("response").innerHTML = xmlhttp.responseText;

                        }, 1000);
                    </script> -->

                    <!-- <div id="response"></div> -->

                    <!-- <script>
                        // document.getElementById("responses").innerHTML=localStorage.getItem("textvalue");
                        setInterval(function() {
                            var xmlhttp = new XMLHttpRequest();
                            // console.log('hello')
                            xmlhttp.open("GET", "response.php", false);
                            xmlhttp.send(null);
                            document.getElementById("response").innerHTML = xmlhttp.responseText;
                            // xmlhttp.open("GET","fitness.php", false);
                            // var firstname=document.getElementById("response").value;
                            // localStorage.setItem("textvalue",firstname)

                        }, 1000);
                    </script> -->

            <?php
                    //    $i=$i+1; }
                } else {

                    echo '     
                        <div class="maincards">
                        <div class="subcards">
                        <div>

                        <div class="" id="demo" style="color:white;"></div>
                    </div>
                            <div class="cardsphase1">
                            

                                <div class="month">

                                    <h1>' . $planname . '</h1>
                                    
                                    <h1>' . $duration . '</h1>
                                    <h1 style="display:none;">' . $name . '</h1>
                                    <h1 name="oid" style="display:none;">' . $oid . '</h1>
                                </div>
                                <div class="rupees">
                                    <h1>₹ ' . $price . '</h1>
                                    <p>₹ 333 Per Month</p>
                                </div>
                            </div>
                            <div class="cardsphase2">
                                <div>
                                    <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                                </div>
                                <div class="cardinfo">
                                    <ul>

                                        <li> ACCESS TO THIS CLUB </li>
                                        <li> only ₹ 333 for Month </li>

                                        
                                    </ul>
                                </div>
                                <div class="btnoin">
                 <a href="./TxnTest.php?planname=' . $planname . ' & username=' . $username . '& duration=' . $duration . '& oid=' . $oid . ' & name=' . $name . ' "class="joinnow"  style="text-decoration:none">buy</a>

                                </div>
                            </div>
                        </div>
                        </div> ';
                }
            }
            // $_SESSION["duration"] = $duration;
            // $_SESSION["start_time"] = date("Y-m-d H:i:s");

            // $end_time = date('Y-m-d H:i:s', strtotime('+' . $_SESSION["duration"] . 'minutes', strtotime($_SESSION["start_time"])));

            // $_SESSION['end_time'] = $end_time;
        } else {
            // if(isset($_POST['joinbtn'])){
            // //    alert("ahe");
            //     // echo "hello";
            //     header("location.alert.php");
            // }

            echo '     
            <div class="maincards">
                    <div class="subcards">
                        <div class="cardsphase1">
                            <div class="month">
                                <h1>1 Month</h1>
                            </div>
                            <div class="rupees">
                                <h1>₹ 1000</h1>
                                <p>₹ 333 Per Month</p>
                            </div>
                        </div>
                        <div class="cardsphase2">
                            <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                        </div>
                        <div class="cardinfo">
                            <ul>
                                <li> ACCESS TO THIS CLUB </li>
                                <li> only ₹ 333 for Month </li>
                                
                            </ul>
                        </div>
                        <div class="btnoin">
                                <div>' ?>

            <!-- Display the countdown timer in an element -->



            <script>
                // var countDownDate = <?php

                                        // echo strtotime(" $h:$m:$s") 
                                        ?> * 1000;
                // var now = echo time() ?> * 1000;


                // // Update the count down every 1 second

                // var x = setInterval(function() {

                // // Get todays date and time

                // // 1. JavaScript

                // // var now = new Date().getTime();

                // // 2. PHP

                // now = now + 1000;

                // // Find the distance between now an the count down date

                // var distance = countDownDate - now;

                // // Time calculations for days, hours, minutes and seconds

                // var $days= Math.floor(distance / (1000 * 60 * 60 * 24));
                // var $hours = Math.floor((distance %(1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                // var $minutes = Math.floor((distance %(1000 * 60 * 60))/(1000 * 60)); 
                // var $seconds = Math.floor((distance %(1000 * 60))/1000);

                // // Output the result in an element with id="demo"

                // document.getElementById("demo").innerHTML= $hours + "h" + $minutes + "m" + $seconds + "s";

                // // If the count down is over, vrite some text

                // if (distance < 0) {

                // clearInterval(x);
                // document.getElementById("demo").innerHTML="EXPIRED";
                // }
                // },1000);




                function joinbutton() {
                    alert(' Please Login First Then Join ');

                    var firstjoinlogin = document.getElementById('firstjoinlogin');
                    firstjoinlogin.innerHTML = 'please Login First'
                    var secondjoinlogin = document.getElementById('secondjoinlogin');
                    secondjoinlogin.innerHTML = 'please Login First'
                    var thirdjoinlogin = document.getElementById('thirdjoinlogin');
                    thirdjoinlogin.innerHTML = 'please Login First'
                }
            </script>


            <input class="joinnow" type="button" name="joinbtn" onclick="joinbutton()" value="Join Now"></input><br><br>
            <a id="firstjoinlogin" href="login.php" class="pleaseloginfirst"></a>
            <?php
            echo '</div>
                        </div>
                    </div>
                    </div> ';

            echo '     
        <div class="maincards">
                <div class="subcards">
                    <div class="cardsphase1">
                        <div class="month">
                            <h1>3 Month</h1>
                        </div>
                        <div class="rupees">
                            <h1>₹ 1000</h1>
                            <p>₹ 333 Per Month</p>
                        </div>
                    </div>
                    <div class="cardsphase2">
                        <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                    </div>
                    <div class="cardinfo">
                        <ul>
                            <li> ACCESS TO THIS CLUB </li>
                            <li> only ₹ 333 for Month </li>
                            
                        </ul>
                    </div>
                    <div class="btnoin">
                            <div>' ?>
            <input class="joinnow" type="button" name="joinbtn" onclick="joinbutton()" value="Join Now"></input> <br><br>
            <a id="secondjoinlogin" href="login.php" class="pleaseloginfirst"></a>
            <?php
            echo '</div>
                    </div>
                </div>
                </div> ';

            echo '     
        <div class="maincards">
                <div class="subcards">
                    <div class="cardsphase1">
                        <div class="month">
                            <h1>persnal</h1>
                        </div>
                        <div class="rupees">
                            <h1>₹ 1000</h1>
                            <p>₹ 333 Per Month</p>
                        </div>
                    </div>
                    <div class="cardsphase2">
                        <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                    </div>
                    <div class="cardinfo">
                        <ul>
                            <li> ACCESS TO THIS CLUB </li>
                            <li> only ₹ 333 for Month </li>
                            
                        </ul>
                    </div>
                    <div class="btnoin">
                            <div>' ?>

            <input class="joinnow" type="button" name="joinbtn" onclick="joinbutton()" value="Join Now"></input><br><br>
            <a id="thirdjoinlogin" href="login.php" class="pleaseloginfirst"></a>
        <?php
            echo '</div>
                    </div>
                </div>
                </div> ';
        }
        ?>


        <!-- <script type="text/javascript">
            setInterval(function(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","response.php",false);
                xmlhttp.send(null);
                document.getElementById("response").innerHTML=xmlhttp.XMLHttpRequest;
            },1000);

        </> -->

        <!-- <div class="maincards">
                    <div class="subcards">
                        <div class="cardsphase1">
                            <div class="month">
                                <h1><b>3</b> <br>MONTH</br></h1>
                            </div>
                            <div class="rupees">
                                <h1>₹ 1000</h1>
                                <p>₹ 333 Per Month</p>
                            </div>
                        </div>
                        <div class="cardsphase2">
                            <div>
                                <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                            </div>
                            <div class="cardinfo">
                                <ul>
                                    <li> ACCESS TO THIS CLUB </li>
                                    <li> only ₹ 333 for Month </li>
                                    <input name="threeplan" value=""></input>
                                    <li> </li>
                                    
                                </ul>
                            </div>
                            <div class="btnoin">
                                <input class="joinnow" type="button" name="firstjoinbtn"><a href="orderpay.php">Join
                                    Now</a></input>
                            </div>
                        </div>
                    </div>
                    </div>  -->

        <!-- <div class="subcards">
                    <?php
                    // foreach ($firstdatafetch as $post) : 
                    ?>
                        <div class="cardsphase1">
                            <div class="month">
                                <h1><b>1</b> <br>MONTH</br></h1>
                            </div>
                            <div class="rupees">
                                <h1>₹ 500</h1>
                                <p>₹ 333 Per Month</p>
                                <?php
                                // $secondplan = "SELECT `plan_name` FROM `plan` WHERE id='2'";
                                // $secondplanresult = mysqli_query($conn, $secondplan);
                                // while ($norfp = mysqli_fetch_assoc($secondplanresult)) {
                                // }
                                ?>
                            </div>

                        </div>
                        <div class="cardsphase2">
                            <div>
                                <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                            </div>
                            <div class="cardinfo">
                                <ul>
                                    <li> ACCESS TO THIS CLUB </li>
                                    <li> only ₹ 333 for Month </li>
                                    <li><?php
                                        // echo $post['plan_name']; 
                                        ?></li>
                                    <li><?php
                                        // echo $post['price']; 
                                        ?></li>
                                </ul>
                            </div>
                            <div class="btnoin">
                                <input class="joinnow" type="button" name="joinbtn2"><a href="orderpay.php">Join
                                    Now</a></input>
                            </div>
                        </div>
                </div>
            <?php
            // endforeach;
            ?> -->
        <!-- 
            <div class="subcards">
                <?php
                // foreach ($thirddatafetch as $post) : 
                ?>
                    <div class="cardsphase1">
                        <div class="month">
                            <h1><b>3</b> <br>MONTH</br></h1>
                        </div>
                        <div class="rupees">
                            <h1>₹ 2000</h1>
                            <p>₹ 333 Per Month</p>
                        </div>
                    </div>
                    <div class="cardsphase2">
                        <div>
                            <hr style="color:white; width:90%; height:2px; margin-left:20px;">
                        </div>
                        <div class="cardinfo">
                            <ul>
                                <li> ACCESS TO THIS CLUB </li>
                                <li><?php
                                    // echo $post['plan_name']; 
                                    ?></li>
                                <li><?php
                                    // echo $post['price']; 
                                    ?></li>
                            </ul>
                        </div>
                        <div class="btnoin">
                            <input class="joinnow" type="button" name="joinbtn3"><a href="orderpay.php">Join
                                Now</a></input>
                        </div>
                    </div>
            </div>
        <?php
        // endforeach; 
        ?>
    -->


        <!-- <hr style="height:5px; color:white; opacity:1;padding-top: 16px;"> -->
        <hr style="height:2px; color:white; opacity:1;padding-top: 16px; margin-top: 0px; margin-bottom: 0px;">

        <!-- <div class="">

            <div class="cards1">
                <div class="cardsphase1">
                    <h1 class="months"><b>3</b> <br>month</br></h1>
                    <div class="namers">
                        <h1>₹ 1000</h1>
                        <p>₹ 333 Per Month</p>
                    </div>
                    </div>
                    <div class="cardsphase2"> <br>
                        <div>
                            <hr style="color:red">
                        </div>
                        <div>asdasdas</div>
                    </div>
                
            </div>

            <div class="cards">
                <h1><b>3</b> <br>month</h1>
                <h1></h1>
            </div>
            <div class="cards">
                <h1><b>3</b> <br>month</h1>
                <h1></h1>
            </div>

        </div>
        <br>
        <h1>asdasdas</h1>
    </div> -->
        <!-- <div>
            <div class="dietweight">
                <header style="background-image: url(images/fitness.jpg); background-size: cover;">
            </div>
        </div> -->

        <div>
            <header class="dietweight" style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.4)),url(images/dietimage.jpg) no-repeat center; background-size: cover;width:100%; height:100vh;">

                <h1 class="Samarth_Transform_Header">
                    Samarth Fitness Transform
                </h1>
                <p class="Samarth_Transform_Para">
                    Success is the sum of small efforts !<br>
                    So Only I can change my life. No one can do it for me .
                </p>

                <div class="main-icon">
                    <div class="sub-icon">
                        <i class="transform fa-solid fa-bowl-rice"></i>
                        <h1>Nutrition Guidlines</h1>
                    </div>
                    <div class="sub-icon">
                        <i class="transform fas fa-edit"></i>
                        <h1>Customized Workout Plan</h1>
                    </div>
                    <div class="sub-icon">
                        <i class="transform fas fa-chart-line"></i>
                        <h1>Deily Check-ins and More</h1>
                    </div>
                </div>


        </div>
        <hr style="height:2px; color:white; opacity:1;padding-top: 16px; margin-top: 0px; margin-bottom: 0px;">
        <?php
        include "footer.php";
        ?>

        <script>


        </script>
</body>

</html>