<?php
session_start();
$message ='';
require("connection.php");

if(isset($_POST['verify'])){
    $query="Select * FROM `users` WHERE  `sendotp`='$_POST[verifycode]'";
    $result=mysqli_query($con, $query);

    $code=$_POST['verifycode'];
    // $sendotp=$_POST['sendotp'];
    if(mysqli_num_rows($result)==1)
    {
        $result_fetch=mysqli_fetch_assoc($result);

        if($code==$_SESSION['sendotp']=true){
            $_SESSION['sendotp']=$result_fetch['sendotp'];
            header('location:passreset.php');
        }

    else{
        // $message ='<div class="alert alert-danger">please write a right otp</div>';
        echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Wrong OTP</div>";
    }

    }
    else{
        echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Insert OTP</div>";
    }

}
// else{
//     echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Insert OTP</div>";

// }

?>
<script>
    function checkforblank(){
    if(document.getElementById('verifycode').Value == "")
    {
        alert('please insert first name');
        return false;
    }
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(photo/sendotp.jpg);


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
            padding: 10px;
            margin: 10px;
        }

        
        .sendotp{
            margin-left: 20%;
            margin-right: 20%;
            padding: 2%;
            background-color: rgba(0, 0, 0,0.7);
            border-radius: 10px;
        }

    </style>
</head>
<body>
    
    <form action="" method="POST" onsubmit="return checkforblank()">
        <div class="sendotp">
    <p> verify OTP</p>
<input type="text" name="verifycode" id="verifycode" placeholder="ex - 123456">
<br>
<button class="btn" name="verify" ><b>verify</b></button>
</div>
    </form>
</body>
</html>