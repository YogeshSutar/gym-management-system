<?php
require('dbconnect.php');
require('alert.php');

session_start();
// if(isset($_POST['submit'])){
    // $username=$_SESSION['username'];

    // $myquery = "SELECT * FROM `users` WHERE 'username' = '$username'";
    // $runquery = mysqli_query($conn, $myquery);
    // if(mysqli_num_rows($runquery) > 0){
    //     echo 'username is exist';
    // }
    // else{
    //     echo 'no';
    // }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offline User Payment Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="allcss/offlinepayment.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
window.history.forward();
</script>
<body style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,1)),url(images/offlinepayment.jpg) no-repeat center; background-size: cover;width:100%; height:100%; background-attachment:fixed; ">
    <?php



    // $query = "SELECT * FROM `plan`";
    // $query_run = mysqli_query($conn, $query);
    // while ($data = mysqli_fetch_assoc($query_run)) {
    //  $price = $_POST['selected_price'];
    //  echo $price;  
    // $query = "SELECT * FROM `plan`";
    // if($query_run = mysqli_query($conn, $query)){
    // while ($data = mysqli_fetch_assoc($query_run)) {
    //     $planname = $data['plan_name'];


    // if(isset($_POST['plans'])){

    // }
    echo '
    <form action="storeddata.php" method="POST">
      ';

    // plannamesss='.$planname.}}
    ?>
    <div class="main_content">
        <div class="sub_content">
            <span>
                Name :
            </span>
            <input class="innertext" type="text" name="names" placeholder="Enter Name">
        </div>
        <?php 
            //   $username=$_SESSION['username'];

            //   $username_query = "SELECT * FROM `users` WHERE 'username' = '$username'";
            //   $runquery = mysqli_query($conn, $username_query);
            //   if(mysqli_num_rows($runquery) > 0){
            //       echo 'username is exist';
            //   }
            //   else{
            //       echo 'no';
            //   }
              ?>
        
        <div class="sub_content">
            <span>
                Username :
            </span>
            <input class="innertext" type="text" id="username" for="username" name="username" placeholder="Enter Username" required>
            <span id="uexists"><b>Username Exist</b></span>




        </div>
        <div class="sub_content">
            <span>
                Plan :
            </span>
            <br>
            <select id="" name="plans" class="inneroption" style="color: white;">>
                <option value="" class="inneroption"> Select Plan</option>


                <?php
                $query = "SELECT * FROM `plan`";
                $query_run = mysqli_query($conn, $query);
                // if($res = mysqli_num_rows($query_run)){
                $noOfRowsb = mysqli_num_rows($query_run);
                // if ($noOfRowsb > 0) {
                while ($data = mysqli_fetch_assoc($query_run)) {
                    // $planname = $data['plan_name'];
                    // echo '
                ?>
                    <option name="plans" value="<?php echo $planshow = $data['plan_name'] ?>" class="inneroption"> <?php echo $data['plan_name'] ?></option>
                <?php
                    // ';

                    // }
                    // }

                }

                // }
                ?>
            </select>
        </div>
        <div class="sub_content" name="">
            <span>
                Amount :
            </span>
            <br>
            <select id="" name="selected_price" class="inneroption" style="color: white;">
                <option value="" class="inneroption">Select Amount</option>
                <?php
                $query = "SELECT * FROM `plan`";
                if ($query_run = mysqli_query($conn, $query)) {
                    if ($res = mysqli_num_rows($query_run)) {
                        while ($data = mysqli_fetch_assoc($query_run)) {

                            echo '
                    <option value=' . $data['price'] . ' class="inneroption" name="">' . $data['price'] . '</option>
                    ';
                        }
                    }
                }
                ?>

            </select>

        </div>
        <div class="sub_content">
            <span>
                Duration :
            </span>
            <br>
            <select id="" name="durations" class="inneroption" style="color: white;">>
                <option value="" class="inneroption"> Select Duration</option>
                <?php
                $query = "SELECT * FROM `plan`";
                if ($query_run = mysqli_query($conn, $query)) {
                    if ($res = mysqli_num_rows($query_run)) {
                        while ($data = mysqli_fetch_assoc($query_run)) {
                            echo '
                    <option value=' . $duration = $data['duration'] . ' class="inneroption" name="duration">' . $duration = $data['duration'] . '</option>
                    ';
                        }
                    }
                }
                ?>

            </select>
        </div>

        <!-- <div class="sub_content">
                <span>
                    date :
                </span>
                <input class="innertext" type="date" value="asd">

            </div> -->
            <button class="btnreg btn" href="#" name="submit" id="btn"><b>Submit</b></button>
            <button class="btnreg btn" style="margin-left:250px;"><a href="badminpage.php" style="text-decoration: none; color:light-blue; font-size:15px;">back</a></button>

    </div>
    </form>
    <?php
    // }
    ?>
</body>
<script>
    let us = false;
    let username = document.getElementById('username');

    username.onkeyup = function() {
        let user = $('#username').val();


        $.ajax({
            url: 'validusername.php',
            type: 'post',
            data: 'username=' + user,
            success: function(result) {
                if (result == 'yes') {
                    $('#uexists').show();
                }
                if (result == 'no') {
                    $('#uexists').hide();
                    us = true;
                    console.log(us);
                }
            }
        });
        console.log("before");
    }
</script>

</html>