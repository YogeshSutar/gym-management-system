<?php
require 'dbconnect.php';
if(!$conn)
{
    die("failed to coonect database").mysqli_connect_error();
}
else
 {
     if($_SERVER['REQUEST_METHOD']=='POST')
     {        $username=$_POST['username'];
            $sqlc="SELECT * FROM `users` WHERE `username`='$username'";
            $exits=mysqli_query($conn,$sqlc);

         $noOfROws=mysqli_num_rows($exits);
          
         if($noOfROws>0)
         {
            // echo'<body><div class="alert alert-warning alert-dismissible fade show" role="alert">
            // <strong> UserName Already Exits!</strong> please enter another username
            // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            // </div></body>';
            // header('location:signup.html');
            echo'yes';

        }
        else
        {
            echo'no';
        }
        
    }
  }  ?>