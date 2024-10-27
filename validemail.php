<?php
if($_SERVER['REQUEST_METHOD']=='post');
{
    require 'dbconnect.php';
if(!$conn)
{
    die("failed to connect database").myssqli_connect_errpr();
}
else{
    $email=$_POST['email'];
    $sql="SELECT *from `users` where `email`='$email'";
    $insert=mysqli_query($conn,$sql);
    
    $noofrows=mysqli_num_rows($insert);
    if($noofrows>0)
    {
        echo'yes';
    }
    else{
        echo'no';
    }
}
    
}
?>