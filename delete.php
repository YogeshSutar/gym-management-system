<?php

$server="localhost";
$susername="root";
$spassword="";
$databasename="gym";
$conn=mysqli_connect($server,$susername,$spassword,$databasename);
if(!$conn)
{
	echo'database not connect';
}
else
{
if(isset($_GET['delete_username'])){
// $updateusername=$_GET['un'];
$delete_data = $_GET['delete_username'];
$query = "DELETE FROM `users` WHERE `username`='$delete_data'";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record deleted successfully');</script>";
    // header("location:adminpage.php");
    ?>

    <meta http-equiv="refresh" content="0, URL= http://localhost/gym/adminpage.php">

<?php

}
else{
    echo "<script>alert('No delete record');</script>";
}
}
}
?>