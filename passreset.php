<?php

session_start();
// error_reporting(23);
require("dbconnect.php");
// $username=$_SESSION['username'];

// $email=$_SESSION['email']; 
if( isset($_POST['reset']) ){
    if(empty($_POST['password'])){
        echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Insert Password!</div>";
    }
    if(empty($_POST['verifypassword'])){
        echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Insert Confirm Password!</div>";
    }
// $query="SELECT * FROM `users` WHERE `email`='$_POST[email]' ";
// $result=mysqli_query($con,$query);
// if($result){
    // $reset_token = $_POST['resettoken'];

    $newpassword=$_POST['password'];
    $verifypassword=$_POST['verifypassword'];
    if($newpassword==$verifypassword)
    {
  $reset_token=$_SESSION['resettoken'];
  $_SESSION['resettoken']=$reset_token;

        // $query ="UPDATE `users` SET `password`='$verifypassword' WHERE `email`='$_POST[email]'";
  $query = "UPDATE `idpass` set `password` ='".password_hash($newpassword,PASSWORD_DEFAULT)."' WHERE `resettoken`= '".$reset_token."' ";

        $result_reset=mysqli_query($con, $query);

        if($result_reset)
        {

            if(mysqli_affected_rows($con,)>0){
                echo "password reset successfully";
                 header('location:login.php');
            }
            else{
                echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Insert Fields!</div>";
            }
        }else{
            echo "no result";
        }

    }
    
else{
    echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Please Match Password!</div>";
}
    
}

// session_destroy();
  // }
// else{
  // echo "last password do not match";
// }
// if( isset($_POST['reset']) && isset($_POST['username'])){
// $pass=password_hash($_POST['newpassword'],PASSWORD_BCRYPT);
// $update="UPDATE `users` SET `password`='$pass' WHERE `username`='$_POST[username]'";
// if(mysqli_query($con, $update)){
//   echo "<script>
//   alert('pass update');
//   window.location.href='login.php';
//   </script>";
// }
// else{
//   echo "<script>
//   alert('server down try again leter');
//   window.location.href='login.php';
//   </script>";
// }

// }

// if(isset($_POST['reset'])){
// $newpassword = $_POST["newpassword"];
// $verifypassword = $_POST["verifypassword"];

// if($newpassword == $verifypassword)
// {
//   // $randomCode = $_POST['$'];
//   $reset_token=$_SESSION['resettoken'];
//   // $result_fetch=mysqli_fetch_assoc($randomCode);

//   $_SESSION['resettoken']=$reset_token;
//   $reset_query = "UPDATE `users` set `password` ='".password_hash($newpassword,PASSWORD_DEFAULT)."' WHERE `resettoken`= '".$reset_token."' ";

//   // if($reset_query)
//   // {
//   //   // header('location:login.php');
//   //   echo "'password link send to mail';";
//   //   header('location:login.php');
//   // }
//   if(mysqli_query($con, $reset_query))
//   {
//      #if data inserted
//       echo "<script>
//       alert('registration sucssesfully');
//       window.location.href='login.php';
//       </script>";
//   }
//   else{
//     echo "<script>
//     alert('erong');
//     window.location.href='passreset.php';
//     </script>";
//   }
// }
// else{
//         echo " password do not match";
        
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
            padding: 40px;
            margin: 20px;
            text-align: center;
        }

        p{
            font-size: 35px;
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

        
        .newpass{
            margin-left: 20%;
            margin-right: 20%;
            padding: 2%;
            background-color: rgba(41, 41, 41, 0.592);
            border-radius: 10px;
        }
    </style>
    <title>new password</title>
</head>
<body>
<form action="" method="POST">
  <div class="newpass">
<!-- <p>Password:</p>
      <input type="password" name="newpassword" id="newpassword" placeholder="Enter new Password" required>
      <div id="message">
<span id="uppercase">Password atleast contains one uppercase</span>
<span id="lowercase">Password atleast contains one lowercase</span>
<span id="number">Password atleast contains one number</span>
<span id="length">Password lenght should be in 8 to 16</span>
<span  id="scharcter">Password atleast contains one special charcater</span>
</div> -->
<div class="input">
<p class="spanvalue" for="password">Password :</p>
<input class="box" type="password" id="password"  size="20" maxlength="20" name="password" placeholder="Enter Your password" required>
<br>
<input type="button" id="btn1" value="show">
<div id="message">
<span id="uppercase">Password atleast contains one uppercase</span>
<span id="lowercase">Password atleast contains one lowercase</span>
<span id="number">Password atleast contains one number</span>
<span  id="scharcter">Password atleast contains one special charcater</span>
<span id="length">Password lenght should be in 8 to 16</span>
</div>

</div>
      <p>confirm Password:</p>
      <input type="password" name="verifypassword" id="password" placeholder="Enter verify password" required>
<br>
      <style>
   #uppercase,#number,#lowercase,#length,#scharcter,.btn{
       display:none;
       color: white;
    }
   .btnreg{
    /* margin-left: 50px; */
    margin-right: 50%;    
    }
    #btn{
      margin:10px;
      padding-left:20px;
      margin-left: 34%;
    }

    </style>

      <button  class="btnreg btn" type="submit" name="reset" id="btn" ><b>reset password</b></button>
      </div> 
    </form>
    <script>
    password=document.getElementById('password');
    lowercase=document.getElementById('lowercase');
    uppercase=document.getElementById('uppercase');
    number=document.getElementById('number');
    length=document.getElementById('length');
     password.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

 
password.onblur = function() {
  document.getElementById("message").style.display = "none";
}
// cnt=0;
var l=false;
var u=false;
var n=false;
var len=false;
 
password.onkeyup = function() {
  // show button password
  let btn1 =document.getElementById('btn1');
 btn1.onclick=function(){
   let type= password.getAttribute('type')=== "password"?"text" :"password";
    password.setAttribute("type",type);
 }
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(password.value.match(lowerCaseLetters)) {  
    lowercase.style.display='none';
    l=true;
    console.log(l);
    // cnt=cnt+1;
  } 
  else{
    lowercase.style.display='block';
  } 
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(password.value.match(upperCaseLetters)) {  
    uppercase.style.display='none';
    u=true;
    console.log(u);
    // cnt+=1;
  }
  else {
 
uppercase.style.display='block';
}

  // Validate numbers
  var numbers = /[0-9]/g;
  if(password.value.match(numbers)) {  
    number.style.display='none';
    n=true;
    console.log(n);
    // cnt+=1;
  } 
  else {
 

number.style.display='block';
}
  
  // Validate length
  if(password.value.length <= 8) {
    length.style.display='block';
     
  }
  else {
 

length.style.display='none';
len=true;
// cnt+=1;
console.log(len);
}
if(n && u && len && l)
{
  console.log("show btn");
  btn.style.display='block';

}
else{
  console.log("hide btn");
btn.style.display='none';
}
}
btn=document.getElementById('btn');


    </script>
    </body>
</html> 