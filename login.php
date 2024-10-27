<?php 
  // require 'nav.php';
  ?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
  {
  $username=$_POST['username'];
  $password=$_POST['password'];
 

  require 'dbconnect.php';


$server="localhost";
$susername="root";
$spassword="";
$databasename="gym";
$conn=mysqli_connect($server,$susername,$spassword,$databasename);
  if(!$conn)
  {
        die("failed to connect database").mysqli_connect_error();
  }
  else
    {
          
          $sql="SELECT * FROM `users` WHERE `username`='$username'";
          $exits=mysqli_query($conn,$sql);
          $result=mysqli_num_rows($exits);
      
          if($result==1)
          {

            while($row=mysqli_fetch_assoc($exits))
            {
              if(password_verify($password,$row['password']))
              {
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Login Sucessfully</strong> using username and password
                <button type="button" class="btn-close" dat`a-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            session_start();
            $_SESSION['username']=$username;

            echo'<script>

                setTimeout(()=>{
                  '.header ('location:index.php').'

                },3000);
            </script>';
            
              }
              else
              {
                echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> invalid   password</strong>  please enter correct password   
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'; 
              }
            }
      
          }
          else
          {
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> invalid username  </strong>  please enter correct   username   
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'; 
          }
      
    }

}
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="allcss/loginpage.css">
        
        <!-- style CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <style>
        body{
          /* background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3),url(images/gymlogin.jpg)); */
          /* background-image:url('images/gymlogin.jpg'); */
          background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)), url("images/gymlogin1.jpg");
          background-position: center;
          background-size:cover;
        }
        /* 
        .sign a{
          text-decoration: none;
          color: white;
        }
        .loginform{
          position:relative;
          top: 9em;
          left:15vw;
          width:45vw;
          color:white;
          background-color:rgba(0,0,0,.4);
        } */
      </style>
      </head>
        <body>
        

        <nav class="navbar123">
                    <img src="images/logo.jpg" alt="" width="90px" height="60">
                    <ul>
                        <li><a class="link" href="index.php" style="text-decoration: none;">HOME</a></li>
                        <li><a class="link" href="Fitness.php" style="text-decoration: none;">FITNESS</a></li>
                        <li><a class="link" href="about.php" style="text-decoration: none;">ABOUT US</a></li>
                        <!-- <li><a class="link" href="comment.php" style="text-decoration: none;">COMMENT</a></li>
                        <li><a class="link" href="contactus.php" style="text-decoration: none;">CONTACT US</a></li> -->
                        <li><a class="link" href="login.php" style="text-decoration: none;">LOGIN</a></li>
                    </ul>
                    <p>Samarth Fitness</p>
                </nav>
    

     <div class="registrationform">
  <form class="container loginform" action="login.php" method='POST'>
  <h1>User Login</h1>

        <div class="input">
        <span class="spanvalue" for="username"><b>Username :</b></span><br>
        <input class="box" type="text" id="username" maxlength="20"  size="5" name="username" placeholder="Enter Your Username" required>
        </div>

        <div class="input">
        <span class="spanvalue" for="password"><b>Password  :</b></span><br>
        <input class="box" type="password" id="password"  size="8" maxlength="20" name="password" placeholder="Enter Your Password" required>
        <br>
        </div>
        <div class="checkbox">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
          <br>
          <br>
        </div>
        <button type="submit" class="btnreg1"><b>Login</b></button>
        <button type="submit" class="btnreg2" style="color:black;"><a href="signup.php" style="text-decoration: none; color:white;" class="signup">signup</a></button>
       <button type="submit" class="btnreg3"> <a  href='forgotpass.php' style="text-decoration: none; color:white;">Forget Password</a></button>
       <button type="submit" class="btnreg3"> <a  href='admin.php' style="text-decoration: none; color:white;">Admin</a></button>

       <!-- <button class="btn btn-primary sign"><a href="signup.php">signup</a></button>
       <button class="btn btn-primary sign"> <a  href='forgetpassword.php'>Forget Password</a></button> -->
       <style>
        a .signup{
          color:red;
        }
      
       </style>
      </form>
      </div>
</body>
<script>
  function show(){
    //let pass= jQuery('#exampleInputPassword1').val();
    jQuery('#exampleInputPassword1').val().show();
  }
  </script>
</html>

<!--<html>
    <head>

 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>login page</title>
        <style>
 
   

 
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
 
<body>

<nav id="nav">
    <ul class="nav justify-content-end bg-dark" >
        <li class="nav-item">
          <a class="nav-link active bg-dark" aria-current="page" href="home.php"> Home</a>
        </li>
        <li class="nav-item bg-dark">
          <a class="nav-link" href="books.php"> Books</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="aboutus.php"> About Us</a>
        </li>
        <li class="nav-item "style="padding-right:10px">
            <a class="nav-link" href="login.php"> Log-in</a>
          </li>
        
      </ul>
    </nav><!    <!DOCTYPE html>
<html>

<body>

<h2>Login Form</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <li class="nav-item "style="padding-right:10px">
            <a class="nav-link" href="signup.html"> signup</a>
          </li>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

</body>
</html>
-->
 <?php
 

//echo"session is start";
//$_SESSION['lastname']="swami";

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

