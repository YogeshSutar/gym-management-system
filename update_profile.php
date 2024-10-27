<?php
session_start();
require('dbconnect.php');
require("nav.php");
require('alert.php');
$username = $_SESSION['username'];
$query = "SELECT * FROM `users` WHERE `username`= '$username'";
$query_run = mysqli_query($conn ,$query);
if (mysqli_num_rows($query_run) > 0) {
while($data = mysqli_fetch_array($query_run)){
    $displayname =  $data['name'];
   $displayusername =  $data['username'];
   $displayemail =  $data['email'];
   $displayphone =  $data['phone'];
   $displaygender =  $data['gender'];
}
}
$username = $_SESSION['username'];
if(isset($_POST['user_update_detail_btn'])){
$susername = $_SESSION['username'];
$update_name = $_POST['update_name'];
$update_email = $_POST['update_email'];
$update_phone = $_POST['update_phone'];
$gender = $_POST['update_gender'];
// echo $susername;
// echo $update_name;
// echo $update_phone;

$query_update ="UPDATE `users` SET `name`='$update_name',`email`='$update_email',`phone`='$update_phone',`gender`='$gender' WHERE `username`='$username'";
$query_run = mysqli_query($conn,$query_update);

if ($query_run) {
    $_SESSION['status'] = "user Record Update successfully";
    $_SESSION['status_code'] = "success";
    // echo "<script>alert('Admin Record Update successfully');</script>";
    // header("location:adminpage.php");
?>
    <meta http-equiv="refresh" content="0, URL= http://localhost/gym/inner_profile_page.php">
<?php
} else {
    $_SESSION['status'] = "No Update User Record";
    $_SESSION['status_code'] = "error";
    // echo "<script>alert('No Update Admin Record');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/inner_profiles.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>Profile Page</title>
    <style>
body {
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("images/profilepic.jpg");
position: fixed;
}
/* .details{
    margin-left: 40px;
    } */
.input_user_detail{
    padding: 10px;
    width:400px;
    border-radius:4px ;
    font-weight: bolder;
}
.details{
    padding: 10px 0px;
    padding-right: 42px;
}
/* option{
} */
/* .Select_gender{
    font-size: 20px;
    font-weight: bolder;
} */
.details_gender{
    /* width: 20px; */
    margin-right: 500px;
    /* margin-right: 00px; */
    font-size: 30px;
    font-weight: bold;
}
input[type=radio] {

    /* width:3%; */
    height: 20px;
    margin-bottom: 50px;

}
#editbtn{

}
    </style>
</head>

<body>
    <div class="main_nav_box">
        <img src="images/user1.png" class="image_styling" alt="user_photo" width="300px"><br><br><br>
        <button style="margin-left:40px;" class="editbtn">Edit Photo<i class="fa-sharp fa-solid fa-image-portrait"></i></button>
        <button style="margin-left:50px;" class="editbtn">Delete<i class="fa-solid fa-trash"></i></button>
    </div>
    <div class="main_inner_box">
        <form action="" method="POST">

        <div class="sub_inner_box">
            <div class="details">
                <span class="detail_head"> Name : </span><br>

                <input class="input_user_detail" name="update_name" type="text" value="<?php echo $displayname?>" required>
                
            
        </div>
        <!-- <div class="details">
            <span class="detail_head"> Username : </span><br>
            <input class="input_user_detail" type="text" value="">
         

        </div>         -->
        <div class="details">

            <span class="detail_head"> Email : </span><br>
            <input class="input_user_detail" name="update_email" type="text" value="<?php echo $displayemail?>">


        </div> 
        <div class="details">

            <span class="detail_head"> Phone : </span><br>
            <input class="input_user_detail" name="update_phone" type="text" value="<?php echo $displayphone?>" required>


        </div> 
        <!-- <div class="details_gender">
            <span class="detail_head" > Gender : </span><br>
<input type="radio" class="Select_gender" name="gender" value="male"> Male
<input type="radio" class="Select_gender" name="gender" value="female"> Female
<input type="radio" class="Select_gender" name="gender" value="unknown"> Unknown	

        </div>     -->
        <div class="details">
            <span class="detail_head">Gender :</span><br>
            <input class="input_user_detail" type="text" name="update_gender" value="<?php echo $displaygender?>"placeholder="Male , Female , Other" required>
            
            <!-- <select name="gender" id="">
                <option  value="Male"><?php echo $displaygender?></option>
                <option  value="female"></option>
                <option  value="Other"><?php echo $displaygender?></option>
            </select> -->

        </div>
        
    </div>

    <div>
        <button class="editbtn" id="editbtn" name="user_update_detail_btn">Update<i class="fa-solid fa-pen"></i></button>
        </div>
        </form>
    </div>

</body>

</html>