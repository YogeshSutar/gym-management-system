
<?php


require 'nav.php';
require 'dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == "POST")
{
     
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
  
 


// $server="localhost";
// $susername="root";
// $spassword="";
// $databasename="login";
// $conn=mysqli_connect($server,$susername,$spassword,$databasename);
if(!$conn)
{
    die("failed to coonect database").mysqli_connect_error();
}
else
 {
        
            $sqlc="SELECT * FROM `idpass` WHERE `username`='$username'";
            $exits=mysqli_query($conn,$sqlc);

         $noOfROws=mysqli_num_rows($exits);
          
         if($noOfROws>0)
         {
            echo'<body><div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> UserName Already Exits!</strong> please enter another username
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div></body>';
            // header('location:signup.html');

        }
       $email= strtolower($email);
        $sql="SELECT * FROM `idpass` WHERE `email`='$email'";
            $exitE=mysqli_query($conn,$sql);

         $noOfROwsE=mysqli_num_rows($exitE);
          
        
         if($noOfROwsE>0)
         {
            // echo'<body><div class="alert alert-warning alert-dismissible fade show" role="alert">
            // <strong>  Email Already Exits!</strong> please enter another  email
            // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            // </div></body>';
            echo'yes';
         }
        else
        {    if($password==$cpassword)
            {
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `idpass` (`userID`, `username`, `password`, `name`, `email`, `mobileno`) VALUES (NULL, '$username', '$hash', '$name', '$email', '$phone')";

                $result=mysqli_query($conn,$sql);
                if($result)
                {
                    session_start();
                    $_SESION['username']=$username;
  

                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> signup Sucessfully</strong> using username and password
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'; 
                    //header('location:login.php');
    
                }
            }
            else
            {

                 echo'<body><div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> password and confirm password not match!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div></body>';
            }

        }
    }

}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style CSS --> 
    <title>registration page</title>
<link rel="stylesheet" href="signup.css">
<script src="jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.mincss" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 
</head>

<body>

<div class="registrationform">
<form action="signup.php" method="POST">
    <h1>REGISTRATION</h1>
    <div class="details">
<div class="input">
<span class="spanvalue">Full Name :</span>
<input class="box" type="text" id="name"  size='5' maxlength='20' name="name" placeholder="Enter Your Name" required>
</div>

<div class="input">
<span class="spanvalue">Email_id :</span>
<input class="box" type="email"  id="email" name="email"   placeholder="Enter Your Email" required>
<span id="eexits"> Email Already exits</span>
</div>

<div class="input">
<span class="spanvalue">Phone Number :</span>
<input class="box" type="text" id="phone" name="phone" maxlength="10"  size="10" placeholder="Enter Your Number" required>
</div>

<div class="input">
<span class="spanvalue" for="username">Username :</span>
<input class="box" type="text" id="username" maxlength="20"  size="5" name="username" placeholder="Enter Your Username" required>
<span id="uexits"> username already exits</span>
</div>

<div class="input">
<span class="spanvalue" for="password">Password :</span>
<input class="box" type="password" id="password"  size="8" maxlength="20" name="password" placeholder="Enter Your Password" required>
<input type="button" id="btn1" value="show">
<div id="message">
<span id="uppercase">Password atleast contains one uppercase</span>
<span id="lowercase">Password atleast contains one lowercase</span>
<span id="number">Password atleast contains one number</span>
<span id="length">Password lenght should be greater than 8</span>
<span  id="scharcter">Password atleast contains one special charcater</span>

</div>

</div>

<div class="input">
<span class="spanvalue" for="cpassword">Confirm Password :</span>
<input class="box" type="password" id="confirm_password" name="cpassword" placeholder="Enter Confirm Password" required>

<span id="match">Password and confirm Password not match</span>
</div>
<style>
   #uppercase,#number,#lowercase,#length,#scharcter,.btn,#uexits,#eexits,#match{
       display:none;
       color:red;
   }
    </style>


 

 

<button class="btnreg btn" href="#" id="btn" ><b>register</b></button>

</div>
</from>
</div>
<script>
    password=document.getElementById('password');
let btn1 =document.getElementById('btn1');
 btn1.onclick=function(){
   let type= password.getAttribute('type')=== "password"?"text" :"password";
    password.setAttribute("type",type);
 }

  let e=false;
  let us=false;
  let username=document.getElementById('username');
 
  username.onkeyup = function() {
   let user=$('#username').val(); 
    
     
          $.ajax({
            url:'valid.php',
            type:'post',
            data:'username='+user,
            success:function(result)
            {
                if(result=='yes')
                {
                    $('#uexits').show();
                }
                if(result=='no')
                {
                  $('#uexits').hide();
                  us=true;
                  console.log(us);
                }
            }
          });
          console.log("before");
        }


          let email=document.getElementById('email');
          email.onkeyup = function(){
            let evalue=$('#email').val();
            $.ajax({
                url:'validemail.php',
                type:'post',
                data:'email='+evalue,
            success:function(result)
            {
              if(result=='yes')
              {

                $('#eexits').show();

              }
              if(result=='no')
              {
                $('#eexits').hide();
                e=true;
                console.log(e);
              }
            }
            })
          }


           
    // if (username.length == 0) {
  //   document.getElementById("uexits").innerHTML = "ds";
  //   return;
  // } else {
  //   var xmlhttp = new XMLHttpRequest();
  //   xmlhttp.onreadystatechange = function() {
  //     if (this.readyState == 4 && this.status == 200) {
  //       document.getElementById("uexits").innerHTML = this.responseText;
  //     }
  //   };
  //   xmlhttp.open("GET", "valid.php?q=" + user, true);
  //   xmlhttp.send();
  // }


// $.post('valid.php',{
//   data:user,
// },
// success:function(result)
//    {
//          if(result=='yes')
//          {
//             exits.style.display='block';
//          }
//          if(result=='no'){
//            esxits.style.display='none';
//          }
//         }
//          );



    
   
  
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
let cpassword=document.getElementById('confirm_password');
cpassword.onkeyup= function(){
  let cp=$('#confirm_password').val();
  let p=$('#password').val();
  if(cp== p )
  {
    $('#match').hide();
  }
  else{
    $('#match').show();
  }
}
btn=document.getElementById('btn');
if(n && u && len && l && e && us)
{
  // console.log("show btn");
  btn.style.display='block';

}
else{
  // console.log("hide btn");
btn.style.display='none';
}
}



    </script>
</body>


</html>
<?php
 


//else
//echo"<br>success";

/*$sql="INSERT INTO `userdetails` (`userID`, `username`, `password`) VALUES ('2','$username', '$password')";
$result= mysqli_query($conn,$sql);
if($result)
{
   echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong> Login Sucessfully</strong> using username and password
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>'; 
}
//session_start();

//echo"session is start";
  
//$_SESSION['username']=;
//$_SESSION['lastname']="swami";

//CREATE TABLE `login`.`logind` ( `userID` INT NOT NULL , `username` VARCHAR(11) NOT NULL , `password` VARCHAR(16) NOT NULL , PRIMARY KEY (`userID`), UNIQ

/*
if($result)
{
  // echo"inserted";
} 
else
{
   echo"error".mysqli_error($sonn,$sql);
}

}*/

?>
