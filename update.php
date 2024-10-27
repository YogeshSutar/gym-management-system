<?php
session_start();
require 'dbconnect.php';
require('alert.php');
// error_reporting();
// $update_id = $_GET['udpade_id'];
// $update_name = $_GET['update_name'];
// $update_email = $_GET['update_email'];
// $update_phone = $_GET['update_phone'];
// $update_username = $_GET['update_username'];

?>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="allcss/signup.css">

        <!-- style CSS -->
        <title>Update page</title>
        <!-- <link rel="stylesheet" href="signup.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.mincss" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <style>
            body {
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)), url("images/gymlogin1.jpg");
                background-position: center;
                background-size: cover;
            }
        </style>
    </head>

    <body>

        <div class="registrationform">
            <form action="" method="GET">
                <h1>UPDATE UP</h1> 
                <div class="details">

                    <div class="input" style="display: none;">
                        <span class="spanvalue">ID :</span>
                        <input class="box" type="text" id="id" size='5' maxlength='20' name="id" value="<?php echo $_GET['udpate_id'] ?>" required>
                    </div>

                    <div class="input">
                        <span class="spanvalue">Full Name :</span>
                        <input class="box" type="text" id="name" size='5' maxlength='20' name="name" placeholder="Enter Your Name" value="<?php echo $_GET['update_name'] ?>" required>
                    </div>

                    <div class="input">
                        <span class="spanvalue">Email_id :</span>
                        <input class="box" type="email" id="email" name="email" placeholder="Enter Your Email" value="<?php echo $_GET['update_email'] ?>" required><br>
                        <span id="eexists"><b>E-mail Already Exists</b></span>

                    </div>

                    <div class="input">
                        <span class="spanvalue">Phone Number :</span>
                        <input class="box" type="text" id="phone" name="phone" maxlength="10" size="10" placeholder="Enter Your Number" value="<?php echo $_GET['update_phone'] ?>" required>
                    </div>

                    <div class="input">
                        <span class="spanvalue" for="username">Username :</span>
                        <input class="box" type="text" id="username" maxlength="20" size="5" name="username" placeholder="Enter Your Username" value="<?php echo $_GET['update_username'] ?>" required>
                        <span id="uexists"><b>Username Already Exists</b></span>

                    </div>


                    <style>
                        #uppercase,
                        #number,
                        #lowercase,
                        #length,
                        #scharcter,
                        #uexists,
                        #eexists,
                        #match {
                            display: none;
                            color: red;
                        }
                    </style>
                    <button class="btnreg btn" href="#" id="btn" class="registerbtn" name="submit"><b>Update</b></button>
                    <style>
                        #btn1 {
                            padding: 10px;
                            border: none;
                            border-radius: 10px;
                        }

                        #btn {
                            padding: 20px;


                            margin-left: 39%;
                            padding-left: 5%;
                            padding-right: 5%;
                        }
                    </style>
                </div>
                </from>
        </div>
        <?php


        if (isset($_GET['submit'])) {
            $id = $_GET['id'];
            $name = $_GET['name'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
            $username = $_GET['username'];

            $query = "UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$phone',`username`='$username' WHERE `ID`='$id'";
            $data = mysqli_query($conn, $query);
            if ($data) {
                $_SESSION['status'] = "Record Update successfully";
                $_SESSION['status_code'] = "success";
                // echo "<script>alert('Record Update successfully');</script>";
                // header("location:adminpage.php");
        ?>
                <meta http-equiv="refresh" content="0, URL= http://localhost/gym/admin_panel_users.php">
        <?php
            } else {
                $_SESSION['status'] = "No Update Record";
                $_SESSION['status_code'] = "error";
                echo "<script>alert('No Update Record');</script>";
            }
        }


        ?>
        <script>
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


            let email = document.getElementById('email');
            email.onkeyup = function() {
                let evalue = $('#email').val();
                $.ajax({
                    url: 'validemail.php',
                    type: 'post',
                    data: 'email=' + evalue,
                    success: function(result) {
                        if (result == 'yes') {

                            $('#eexists').show();

                        }
                        if (result == 'no') {
                            $('#eexists').hide();
                            e = true;
                            console.log(e);
                        }
                    }
                });
                console.log("before");
            }
        </script>
    </body>


</html>