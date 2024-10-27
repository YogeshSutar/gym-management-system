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
            echo'yes';

        }
        else
        {
            echo'no';
        }
        
    }
  }  ?>