<?php
session_start();
require("dbconnect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $randomCode, $reset_token)
{
    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/Exception.php');

    $mail  = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                        //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'webdesignrmc1@gmail.com';                     //SMTP username
        $mail->Password   = 'WEBDESIGN@123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('webdesignrmc1@gamil.com', 'Samarth Fitness');
        $mail->addAddress($email);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'password reset OTP';
        $mail->Body    = "we got request for to reset your password <br>
        your reset code is<br>
         <a >$randomCode</a>";

        $mail->send();
      return true;
    } 
    catch (Exception $e) {
       return false;
    }
}

if(isset($_POST['send-reset-link']))
{
$query="SELECT * FROM `users` WHERE `email`='$_POST[email]'";
$result=mysqli_query($conn,$query);
if($result)
{
    if(mysqli_num_rows($result)==1)
    {
        // $username=$_POST['username'];
        $reset_token=bin2hex(random_bytes(16));
        date_default_timezone_set('Asia/kolkata');
        $date=date("Y-m-d");
        // $email=$_POST['email'];
        $randomCode=mt_rand(0,999999);
        $_SESSION['resettoken']=$reset_token; //for reset password
        $_SESSION['sendotp']=$randomCode;
        // $to=$email;
        // $_SESSION['username']=$username;
        // $sendootp = "INSERT INTO `users`( `sendotp`) VALUES ('12345')";
        $query = "UPDATE `users` SET `resettoken`='$reset_token',`resettokenexpire`='$date',`sendotp`='$randomCode' WHERE `email`='$_POST[email]'";
        if(mysqli_query($conn, $query) && sendMail($_POST['email'], $randomCode, $reset_token))
        {   
            echo "'password link send to mail';";
            header('location:sendotp.php');
        }
        else
        {
            echo "<script>
            alert('server down try again leter');
            window.location.href='login.php';
            </script>";            
        }
    }

    else
    {
        echo "<script>
        alert('email not found');
        window.location.href='forgotpass.php';
        </script>";    
    }
}
else
{
    echo "<script>
    alert('cannot run query');
    window.location.href='login.php';
    </script>";    
}


// $email= $_POST['email'];
// $randomCode=mt_rand(0,999999);
// $_SESSION['random']=$randomCode;

}
// if(isset($_POST['verify'])){
//     $code=$_POST['verifycode'];
//     if($code==$_SESSION['sendotp']){
//         header('location:passreset.php');
//     }
//     else{
//         echo "wrong otp";
//     }
// }

// if(isset($_POST['send-reset-link'])){
//     $email = mysqli_real_escape_string($con, $_POST['email']);
    
//     $emailquery="SELECT * FROM `users` WHERE `email`='$_POST[email]'";

//     $query=mysqli_query($con,$emailquery);

//     if($emailcount>0)
//     {
//         echo "<script>
//    alert('eamil already exist');
//      window.location.href='login.php';
//      </script>"; 
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

body{

            background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/forgotpass.jpg");
            background-position: center;
            background-size:cover;
            padding: 80px;
            margin: 30px;
            text-align: center;
        }

        p{
            font-size: 50px;
            color: white;
        }
        button {
            font-size: 28px;
            margin: 25px 120px;
            padding: 5px 25px;
            outline: none;
            border-radius: 10px;
            border: 2px solid white;
            color: white;
            background: none;
        }
        button:hover {
            color: black;
            background: rgb(96, 208, 241);
            transition: 0.4s;
        }
        input{
            background: rgb(0,0,0,0.8);
            color: white;
            font-size: 20px;
            border-radius: 10px;
            text-align: center;
            padding: 10px 50px;
            margin: 10px;
        }

        
        .reserpass{
            margin-left: 20%;
            margin-right: 20%;
            padding: 2%;
            /* background-color: rgba(0, 0, 0,0.7);
             */
            background-color: rgba(41, 41, 41, 0.592);
            border-radius: 10px;
        }
    </style>
    <title>forgot password</title>
</head>
<body>
    <form method="POST" action="forgotpass.php">
<div class="reserpass">
        <p>reset password</p>
<input type="text" name="email" id="email" placeholder="Enter Your email"><br>
<button class="btn" name="send-reset-link" ><b>send mail</b></button>
<br>
<!-- verify OTP
<input type="text" name="verifycode" id="verifycode" placeholder="ex - 123456">
<button class="btn" name="verify" ><b>verify</b></button> -->
</div>    
</form>
</body>
</html>