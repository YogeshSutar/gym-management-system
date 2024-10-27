<?php
session_start();
require('dbconnect.php');
require('alert.php');

require('nav.php');
$query = "SELECT * FROM `adminlogin`";
$admin_login_result = mysqli_query($conn, $query);


// delete data from ADMIN table 

if (isset($_GET['delete_admin_username'])) {
    // $updateusername=$_GET['un'];
    $delete_admin_data = $_GET['delete_admin_username'];
    $query = "DELETE FROM `adminlogin` WHERE `admin_username`='$delete_admin_data'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        $_SESSION['status'] = "Admin Record deleted successfully";
        $_SESSION['status_code'] = "success";
        // echo "<script>alert('Admin Record deleted successfully');</script>";
        // header("location:adminpage.php");
?>
<meta http-equiv="refresh" content="0, URL= http://localhost/gym/admin_panel_admins.php">
<?php
    } else {
        $_SESSION['status'] = "No delete Admin record";
        $_SESSION['status_code'] = "error";
        // echo "<script>alert('No delete Admin record');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>

<body id="page-top">
    <?php


    ?>



    <!-- Page Wrapper -->
    <div>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
            style="position: fixed; z-index:2;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                style="padding-bottom:30px; padding-top:100px; margin-right:15px;" href="badminpage.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Page </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="padding:1px; margin-top:20px; color:white;">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="badminpage.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                TABLES
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admin_panel_admins.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>ADMIN</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_panel_users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>USERS</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_panel_plans.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>PLANS</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_panel_users_plan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>USERS PLAN</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_panel_users_check_plan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>USERS CHECK OUT PLAN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- offline payment page -->
            <li class="nav-item">
                <a class="nav-link" href="admin_panel_offline_users_payment.php">
                <!-- <i class="fas fa-fw fa-table"></i> -->
                <i class="fa-sharp fa-solid fa-file-invoice-dollar" style="font-size: 22px;"></i>
                    <span>OFFLINE USER PAYMENT </span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>


        <!-- Content Wrapper -->
        <div>

            <!-- Main Content -->


            <!-- Topbar -->
            <!-- <nav class="navbar navbar-expand navbar-light bg-white  mb-3  shadow"> -->

                <!-- Sidebar Toggle (Topbar) -->
                <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <!-- <ul class="navbar-nav ml-auto" style="padding-top:60px;"> -->

                    <!-- Nav Item - Alerts -->
                    <!-- <li class="dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="admin_panel_notifications.php" role="button">
                    Notification
                    <i class="fas fa-envelope fa-fw"></i>
                            </a>
                    </li> -->

                    <!-- Nav Item - Messages -->
                    <!-- <li class="dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            <i class="fas fa-envelope fa-fw"></i>
                        </a> -->





                <!-- </ul> -->
            <!-- </nav> -->

            <div style="padding-left: 200px; padding-top:40px;">

                <!-- End of Main Content -->

                <!-- admin -->


                <div class="admintable" id="admintable">
                    <div class="row mt-5">
                        <div class="col" style="margin-right: -30px; padding-right: 0px; margin-left: 30px;">
                            <div class="card ms-5">

                                <div class="card-header">
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
                                    <h1 style="font-size: 60px; "> Admin Table </h1>
                                    <form action="" method="POST">
                                        <div style="float: right; ">
                                            <input class="searchbox" type="text" placeholder="Search..."
                                                name="filter_value">

                                            <button type="submit" class="searchicon" name="filter_btn"
                                                onclick="hiddencontent()" id="hiddenstart"> <i
                                                    class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered text-center ">

                                        <button
                                            style="border-radius: 10px; padding: 10px; border: none; margin-left: 14px; background: deepskyblue; font-weight: bold;"><a
                                                style="color:white; text-decoration:none;"
                                                href="admin_add_admin_page.php">Add Admin</a> </button>
                                        <thead>

                                            <tr class="" style="background-color: gray; color:white; border:none;">
                                                <th>Id</th>
                                                <th>Admin Name</th>
                                                <th>Password</th>
                                                <th>date_time </th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if (isset($_POST['filter_btn'])) {
                                            $filter_value = $_POST['filter_value'];
                                            $query = "SELECT * FROM `adminlogin` WHERE CONCAT(admin_id,admin_username,admin_password) LIKE '%$filter_value%'";
                                            $query_run = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($data = mysqli_fetch_array($query_run)) {

                                        ?>
                                        <tr class="innerdetail" style="color: black;">

                                            <td><?php echo $data['admin_id'] ?></td>
                                            <td><?php echo $data['admin_username'] ?></td>
                                            <td><?php echo $data['admin_password'] ?></td>
                                            <td><?php echo $data['date_time'] ?></td>
                                            <?php
                                                        echo
                                                        '
                                        <td>
                                        <a href="update_admin.php?update_id= ' . $data['admin_id'] . ' &update_adminname= ' . $data['admin_username'] . ' &update_password= ' . $data['admin_password'] . '  " id="update_any_detail"> <i class="fa-solid fa-user-pen"></i></a>
                                    </td>
                                        <td>
                                            <a href="admin_panel_admins.php?delete_admin_username=' . $data['admin_username'] . '" id="delete_user_detail" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a>
                                        </td>'
                                                        ?>
                                        </tr>
                                        <script>
                                        function check_delete_detail() {
                                            return confirm('Are you sure you want to DELETE this Recorde');
                                        }
                                        </script>
                                        <?php

                                                }
                                            } else {
                                                ?>
                                        <div id="hiddenvalues">
                                            <tr>
                                                <td colspan='5' style="color: black;">
                                                    Record Not Found
                                                </td>
                                            </tr>
                                        </div>
                                        <?php
                                            }
                                        }

                                        if (isset($_POST['filter_btn']) == false) {
                                            while ($data = mysqli_fetch_assoc($admin_login_result)) {
                                            ?>
                                        <tr class="innerdetail" style="color: black;">
                                            <td><?php echo $data['admin_id'] ?></td>
                                            <td><?php echo $data['admin_username'] ?></td>
                                            <td><?php echo $data['admin_password'] ?></td>
                                            <td><?php echo $data['date_time'] ?></td>
                                            <?php
                                                    echo
                                                    '
                                        <td>
                                        <a href="update_admin.php?update_id= ' . $data['admin_id'] . ' &update_adminname= ' . $data['admin_username'] . ' &update_password= ' . $data['admin_password'] . '  " id="update_any_detail"> <i class="fa-solid fa-user-pen"></i></a>
                                    </td>
                                        <td>
                                            <a href="admin_panel_admins.php?delete_admin_username=' . $data['admin_username'] . '" id="delete_user_detail" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a>
                                        </td>'
                                                    ?>
                                        </tr>
                                        <script>
                                        function check_delete_detail() {
                                            return confirm('Are you sure you want to DELETE this Recorde');
                                        }
                                        </script>
                                        <?php
                                            }
                                        }

                                        ?>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>



                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->
            <!-- <br>
            <br><br> -->
            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>



            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

</body>

</html>