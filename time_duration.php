<?php 
require('dbconnect.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Duration</title>
</head>

<body>
<?php
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            // $reset_token = $_SESSION['resettoken'];
            $sqlfe = "SELECT * FROM `plan`";
            $importdata = mysqli_query($conn, $sqlfe);

            while ($data = mysqli_fetch_assoc($importdata)) {
                // echo $row['category_id'];
                // $username = $_SESSION['username'];
                $planname = $data['plan_name'];
                $h = $data['h'];
                $m = $data['m'];
                $s = $data['s'];
            }
        }
?>    
<h1><?php echo $h ?></h1>
<h1><?php echo $m ?></h1>
<h1><?php echo $s ?></h1>
<script>


    
    // Set the date we're counting down to
    // var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
    debugger;
    var countDownsDate = 
    <?php

echo (" $h:$m:$s") ?> 
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
//   var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
</html>