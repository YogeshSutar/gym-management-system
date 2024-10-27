<?php
sessoion_start();
require 'dbconnect.php';

// if(isset($_SESSION['username']))
// {


//   $sql="SELECT * FROM `plan`";
   
//    $insert=mysqli_query($conn,$sql);
    


if(!$conn)
{
	echo'database not connect';
}
else{
    if(isset($_POST['joinbtn'])){
      
    }
}


?>