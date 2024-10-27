<?php
session_start();
require('dbconnect.php');
require('nav.php');
$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);

$query = "SELECT * FROM `plan`";
$planresult = mysqli_query($conn, $query);

$query = "SELECT * FROM `checkoutplane`";
$checkoutplanresult = mysqli_query($conn, $query);

$query = "SELECT * FROM `plan_user`";
$plan_user_result = mysqli_query($conn, $query);

$query = "SELECT * FROM `adminlogin`";
$admin_login_result = mysqli_query($conn, $query);


// delete data from USERS table 

if (isset($_GET['delete_username'])) {
    // $updateusername=$_GET['un'];
    $delete_data = $_GET['delete_username'];
    $query = "DELETE FROM `users` WHERE `username`='$delete_data'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record deleted successfully');</script>";
        // header("location:adminpage.php");
?>
        <meta http-equiv="refresh" content="0, URL= http://localhost/gym/adminpage.php">
    <?php
    } else {
        echo "<script>alert('No delete record');</script>";
    }
}

// delete data from ADMIN table 

if (isset($_GET['delete_admin_username'])) {
    // $updateusername=$_GET['un'];
    $delete_admin_data = $_GET['delete_admin_username'];
    $query = "DELETE FROM `adminlogin` WHERE `admin_username`='$delete_admin_data'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Admin Record deleted successfully');</script>";
        // header("location:adminpage.php");
    ?>
        <meta http-equiv="refresh" content="0, URL= http://localhost/gym/adminpage.php">
    <?php
    } else {
        echo "<script>alert('No delete Admin record');</script>";
    }
}

// delete data from PLANS table 

if (isset($_GET['delete_planname'])) {
    // $updateusername=$_GET['un'];
    $delete_planname = $_GET['delete_planname'];
    $query = "DELETE FROM `plan` WHERE `plan_name`='$delete_planname'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Plan deleted successfully');</script>";
        // header("location:adminpage.php");
    ?>
        <meta http-equiv="refresh" content="0, URL= http://localhost/gym/adminpage.php">
<?php
    } else {
        echo "<script>alert('No delete plan');</script>";
    }
}


// if (isset($_GET['un'])) {
//     $un = $_GET['un'];
//     // $query =;
//     $datas = mysqli_query($conn, "DELETE FROM `users` WHERE 'username'='$un'");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/adminpages.css">
    <title>Admin Page</title>
</head>
<style>
    .innerdetail {
        font-weight: bolder;
    }
</style>

<body>

    <div>
        <header class="silder" style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.4)),url(images/admin.jpg) no-repeat center;  height:50vh;   background-size: cover;">
            <!-- <div class="adminheader">
                <h1 class="adminhead">this is admin panal<?php echo " " . $_SESSION['adminusername'] ?></h1>
            </div> -->
    </div>
    <form action="adminpage.php" method="POST">
        <div class="main_server_nav" id="showtables">
            <div class="sub_server_nav"><input class="serverbtn" type="button" id="selectbtn" value="users" name="users" onclick="usersbtn()"> </div>
            <div class="sub_server_nav"><input class="serverbtn" type="button" id="selectbtn4" value="admin" name="admin" onclick="adminbtn()"> </div>
            <div class="sub_server_nav"><input class="serverbtn" type="button" id="selectbtn1" value="plan" name="plan" onclick="plansbtn()"> </div>
            <div class="sub_server_nav"><input class="serverbtn" type="button" id="selectbtn3" value="plan user" name="planuser" onclick="userplanbtn()"> </div>
            <div class="sub_server_nav"><input class="serverbtn" type="button" id="selectbtn2" value="checkoutplan" name="checkoutplan" onclick="checkoutplanbtn()"> </div>
        </div>
    </form>

    <script>
        // var $select = document.getElementById('selectbtn');
        // var $selectusers = document.getElementById('selectusers');
        // $selectusers.style.display = "none";
        // var events = $select.addEventListener('click', () => {
        // });

        // var $showselects = document.getElementById('showselects');
        // var events = $showselects.addEventListener('click',()=>{
        function usersbtn() {
            var $plans = document.getElementById('plans');
            var $check_out_users_plan = document.getElementById('check_out_users_plan');
            var $userplan = document.getElementById('userplan');
            var $admintable = document.getElementById('admintable');
            var $selectusers = document.getElementById('selectusers'); //main start
            $selectusers.style.display = "block"; // main  start
            $plans.style.display = "none";
            $check_out_users_plan.style.display = "none";
            $userplan.style.display = "none";
            $admintable.style.display = "none";



        }

        function plansbtn() {

            var $plans = document.getElementById('plans'); // main 
            var $check_out_users_plan = document.getElementById('check_out_users_plan');
            var $userplan = document.getElementById('userplan');
            var $admintable = document.getElementById('admintable');
            var $selectusers = document.getElementById('selectusers');
            $selectusers.style.display = "none";
            $plans.style.display = "inline"; // main show
            $check_out_users_plan.style.display = "none";
            $userplan.style.display = "none";
            $admintable.style.display = "none";

            // var $plans = document.getElementById('plans');
            // $plans.style.display = "inline";
        }

        function checkoutplanbtn() {

            var $plans = document.getElementById('plans');
            var $check_out_users_plan = document.getElementById('check_out_users_plan'); // main 
            var $userplan = document.getElementById('userplan');
            var $admintable = document.getElementById('admintable');
            var $selectusers = document.getElementById('selectusers');
            $selectusers.style.display = "none";
            $plans.style.display = "none";
            $check_out_users_plan.style.display = "inline"; // main show
            $userplan.style.display = "none";
            $admintable.style.display = "none";

            // var $check_out_users_plan = document.getElementById('check_out_users_plan');
            // $check_out_users_plan.style.display = "inline";
        }

        function userplanbtn() {

            var $plans = document.getElementById('plans');
            var $check_out_users_plan = document.getElementById('check_out_users_plan');
            var $userplan = document.getElementById('userplan'); // main 
            var $admintable = document.getElementById('admintable');
            var $selectusers = document.getElementById('selectusers');
            $selectusers.style.display = "none";
            $plans.style.display = "none";
            $check_out_users_plan.style.display = "none";
            $userplan.style.display = "inline"; // main show
            $admintable.style.display = "none";

            // var $userplan = document.getElementById('userplan');
            // $userplan.style.display = "inline";
        }

        function adminbtn() {

            var $plans = document.getElementById('plans');
            var $check_out_users_plan = document.getElementById('check_out_users_plan');
            var $userplan = document.getElementById('userplan');
            var $admintable = document.getElementById('admintable'); // main 
            var $selectusers = document.getElementById('selectusers');
            $admintable.style.display = "inline"; // main show
            $selectusers.style.display = "none";
            $plans.style.display = "none";
            $check_out_users_plan.style.display = "none";
            $userplan.style.display = "none";

            // var $admintable = document.getElementById('admintable');
            // $admintable.style.display = "inline";
        }
        // }); 
    </script>
    <!-- // if(isset($_POST['users'])){ -->
    <div>
        <!---------------------------------------- Register users table ------------------------------------------------------>

        <div class="usertablebox" id="selectusers" style="display:none; ">
            <div class="row mt-5">
                <div class="col ">
                    <div class="card ">

                        <div class="card-header ">
                            <style>
                                .searchbox {
                                    border-radius: 10px;
                                    padding: 5px;
                                    margin-right: 10px;
                                    width: 450px;
                                    margin-top: -40px;
                                }

                                .searchicon {
                                    padding: 8px;
                                    border-radius: 5px;
                                    margin-top: -40px;
                                }
                            </style>
                            <h1 style="font-size: 60px; padding-right:20px;"> Users Table </h1>
                            <form action="" method="POST">
                            <div style="float: right; ">
                                <input class="searchbox" type="text" placeholder="email" name="filter_value" >

                                <button type="submit" class="searchicon" name="filter_btn" > <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i> </button>
                            </div>
                            </form>
                            <!-- <input type="button" value="Add User"> -->
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center ">
                                <thead>

                                    <tr class="table-dark">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Username</th>
                                        <th>Created_at</th>
                                        <th colspan="2">Oprations</th>

                                    </tr>
                                </thead>
                                <?php
                                
                                    if(isset($_POST['filter_btn']))
                                    {
                                        $filter_value = $_POST['filter_value'];
      $query = "SELECT * FROM `users` WHERE CONCAT(name,email,phone,username) LIKE '%$filter_value%'";
                                        $query_run = mysqli_query($conn,$query); 
                                        if(mysqli_num_rows($query_run) > 0){
                                            while($data = mysqli_fetch_array($query_run)){

                                                ?>
                                                    <tr class="innerdetail">
                                                        <td><?php echo $data['ID'] ?></td>
                                                        <td><?php echo $data['name'] ?></td>
                                                        <td><?php echo $data['email'] ?></td>
                                                        <td><?php echo $data['phone'] ?></td>
                                                        <td><?php echo $username_detali = $data['username'] ?></td>
                                                        <td><?php echo $data['created_at'] ?></td>
                                                        <?php
                                                        echo
                                                        '
                                                        <td>
                                                            <a href="update.php?udpate_id=' . $data['ID'] . '&update_name=' . $data['name'] . '&update_email=' . $data['email'] . '&update_phone=' . $data['phone'] . '&update_username=' . $data['username'] . '" id="update_any__detail"> <i class="fa-solid fa-user-pen"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="adminpage.php?delete_username=' . $data['username'] . '" id="delete_user_detail" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a>
                                                        </td>';
                                                        ?>
                                                        <script>
                                                            function check_delete_detail() {
                                                                return confirm('Are you sure you want to DELETE this Recorde');
                                                            }
                                                        </script>
                                                    </tr>
                                                <?php
                                                }
                                                
                                            }
                                        }
                                        else{
                                        //     echo'
                                        //    <tr> 
                                        //     <th colspan="6" style="text-align:center;">Record Not Found</th>
                                        //     <tr>';
                                        }
                                    
                                ?>
                                
                                <?php
                                while ($data = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class="innerdetail">
                                        <td><?php echo $data['ID'] ?></td>
                                        <td><?php echo $data['name'] ?></td>
                                        <td><?php echo $data['email'] ?></td>
                                        <td><?php echo $data['phone'] ?></td>
                                        <td><?php echo $username_detali = $data['username'] ?></td>
                                        <td><?php echo $data['created_at'] ?></td>
                                        <!-- <td><a href="update.php?"><i class="fa-solid fa-user-pen"></i></a></td> -->
                                        <?php
                                        echo
                                        '
                                        <td>
                                            <a href="update.php?udpate_id=' . $data['ID'] . '&update_name=' . $data['name'] . '&update_email=' . $data['email'] . '&update_phone=' . $data['phone'] . '&update_username=' . $data['username'] . '" id="update_any__detail"> <i class="fa-solid fa-user-pen"></i></a>
                                        </td>
                                        <td>
                                            <a href="adminpage.php?delete_username=' . $data['username'] . '" id="delete_user_detail" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a>
                                        </td>';
                                        ?>
                                        <script>
                                            function check_delete_detail() {
                                                return confirm('Are you sure you want to DELETE this Recorde');
                                                // var $delete_user_detail = document.getElementById('delete_user_detail'); //main start
                                                // $selectusers.style.display = "none";
                                                // var events = $delete_user_detail.addEventListener('click', () => {
                                                //     $delete_user_detail.style.display = "block"; // main  start
                                                // });
                                            }
                                        </script>
                                        <!-- <td> -->
                                        <!-- <form action="delete1.php" method="POST" >
                                                <button type="submit" name="delete_user_data" value="<?php $data['username'] ?>" class="btn btn-danger btn-sm">Delete</button> -->
                                        <!-- <td> <a href=""> <input type="hidden" name="delete" value=""><i class="fa-solid fa-trash"></i></a></td> -->
                                        <!-- </form>
                                        </td> -->

                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>

        <!-- admin -->


        <div class="admintable" id="admintable" style="display:none; padding:50px;">
            <div class="row mt-4">
                <div class="col">
                    <div class="card ">

                        <div class="card-header text-center">
                            <h1> admin table </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center ">
                                <thead>

                                    <tr class="table-dark">
                                        <th>Id</th>
                                        <th>Admin Name</th>
                                        <th>Password</th>
                                        <th colspan="2">Oprations</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($data = mysqli_fetch_assoc($admin_login_result)) {
                                ?>
                                    <tr class="innerdetail">
                                        <td><?php echo $data['admin_id'] ?></td>
                                        <td><?php echo $data['admin_username'] ?></td>
                                        <td><?php echo $data['admin_password'] ?></td>
                                        <?php
                                        echo
                                        '
                                        <td>
                                        <a href="update_admin.php?update_id= ' . $data['admin_id'] . ' &update_adminname= ' . $data['admin_username'] . ' &update_password= ' . $data['admin_password'] . '  " id="update_any_detail"> <i class="fa-solid fa-user-pen"></i></a>
                                    </td>
                                        <td>
                                            <a href="adminpage.php?delete_admin_username=' . $data['admin_username'] . '" id="delete_user_detail" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a>
                                        </td>'
                                        ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>

        <!---------------------------------------- plan table ------------------------------------------------------>

        <div class="plantablebox" id="plans" style="display:none; padding:50px;">
            <div class="row mt-4">
                <div class="col ">
                    <div class="card ">

                        <div class="card-header text-center">
                            <h1> plans table </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center ">
                                <thead>

                                    <tr class="table-dark">
                                        <th>Id</th>
                                        <th>Plan Name</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th colspan="2">Oprations</th>
                                        <!-- <th>Created_at</th> -->
                                    </tr>
                                </thead>
                                <?php
                                while ($data = mysqli_fetch_assoc($planresult)) {
                                ?>
                                    <tr class="innerdetail">
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['plan_name'] ?></td>
                                        <td><?php echo $data['price'] ?></td>
                                        <td><?php echo $data['duration'] ?></td>
                                        <?php
                                        echo
                                        '
                                        <td>
                                        <a href="update_plans.php?update_plan_id= ' . $data['id'] . ' &update_planname= ' . $data['plan_name'] . ' & update_price= ' . $data['price'] . '& update_duration= ' . $data['duration'] . '  " id="update_any_detail"> <i class="fa-solid fa-user-pen"></i></a>
                                    </td>
                                        <td>
                                            <a href="adminpage.php?delete_planname=' . $data['plan_name'] . '" id="delete_user_detail" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a>
                                        </td>';
                                        ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!---------------------------------------- users plan table ------------------------------------------------------>

        <div class="userplan" id="userplan" style="display:none; padding:50px;">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">

                        <div class="card-header text-center">
                            <h1> users plan table </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center ">
                                <thead>

                                    <tr class="table-dark">
                                        <th>Username</th>
                                        <th>Plan Name</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($data = mysqli_fetch_assoc($plan_user_result)) {
                                ?>
                                    <tr class="innerdetail">
                                        <td><?php echo $data['username'] ?></td>
                                        <td><?php echo $data['plan_name'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>




        <!---------------------------------------- check out plan table ------------------------------------------------------>

        <div class="check-plan-table-box" id="check_out_users_plan" style="display:none; padding:50px;">
            <div class="row mt-4">
                <div class="col">
                    <div class="card ">

                        <div class="card-header text-center">
                            <h1> Check out plan table </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center ">
                                <thead>

                                    <tr class="table-dark">
                                        <th>Id</th>
                                        <th>Orderid</th>
                                        <th>Username</th>
                                        <th>Selected Plan</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <!-- <th>Created_at</th> -->
                                    </tr>
                                </thead>

                                <?php
                                while ($data = mysqli_fetch_assoc($checkoutplanresult)) {
                                ?>
                                    <tr class="innerdetail">
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['orderid'] ?></td>
                                        <td><?php echo $data['username'] ?></td>
                                        <td><?php echo $data['selected_plan'] ?></td>
                                        <td><?php echo $data['txn_amount'] ?></td>
                                        <td><?php echo $data['status'] ?></td>


                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!-- }
// elseif(isset($_POST['plan'])){
    echo '<table border="8">
        <tr>
        <th>id</th>
        <th>plan name</th>
        <th>price</th>
        <th>Duration</th>
        </tr>';
$query = "SELECT * FROM `plan`";
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
// echo "$total";
if($total!=0){
    while($data=mysqli_fetch_assoc($result)){;
    echo "
    
    <tr>
        <th>$data[id]</th>
        <th>$data[plan_name]</th>
        <th>$data[price]</th>
        <th>$data[duration]</th>
    </tr>    
    ";
}
} -->

        <!-- // }
else{
    echo 'none1';
}
    ?> -->

</body>

</html>