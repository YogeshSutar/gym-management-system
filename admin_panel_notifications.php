<?php
session_start();
require('dbconnect.php');
require('nav.php');
$query_plan_user = "SELECT * FROM `plan_user`";
$query_run_plan_user = mysqli_query($conn, $query_plan_user);
if (isset($_GET['delete_username'])) {
    // $updateusername=$_GET['un'];
    $delete_planname = $_GET['delete_planname'];
    $delete_name = $_GET['delete_name'];
    $query = "DELETE FROM `plan_user` WHERE `plan_name`='$delete_planname' && `name`='$delete_name'";
    $display_note = mysqli_query($conn, $query);
}

// if($run_notification_data>){
//     echo "true";
// }
// else{
//     echo "no";
// }
// echo $name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .delete_btn {
            float: right;
            border: none;
        }
    </style>
</head>

<body id="page-top">
    <?php


    ?>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position: fixed; z-index:2;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="padding-bottom:30px; padding-top:100px; margin-right:15px;" href="badminpage.php">
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
                    <span>OFFLINE USER PAYMENT </span>
                </a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white  mb-4  shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto" style="padding-top:60px;">
<h1 style="margin-right:500px;">Expired Plans</h1>
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






                    </ul>

                </nav>

                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid" style="padding-left: 230px;">
                    <!-- <form action="" method="GET"> -->
                    <!-- Page Heading -->

                    <?php

                    // $username = $_SESSION['username'];
                    $display_notification_data = "SELECT * FROM `plan_user` WHERE `end_time`<CURRENT_TIMESTAMP";
                    $run_notification_data = mysqli_query($conn, $display_notification_data);

                    while ($display_note = mysqli_fetch_assoc($run_notification_data)) {
                        $main_username = $display_note['username'];
                        $name = $display_note['name'];
                        $planname = $display_note['plan_name'];
                        $expired_date = $display_note['end_time'];
                        $info = 'Plan is Expired Today';

                    ?>
                                    <table class="table table-bordered">

                                        <tr style="color:black; font-weight:bold; font-size:20px; background:white;">
                                            <td id="td_notification" class="table_notification">
                                                <?php echo $name . " " . $planname . " " . $info . " On " . $expired_date ?>
                                                <?php echo '<button class="delete_btn"><a href="admin_panel_notifications.php?delete_planname=' . $planname . '& delete_name=' . $name . ' & delete_username=' . $main_username . '" onclick="return check_delete_detail()" > <i class="fa-solid fa-trash"></i></a></button> '; ?>
                                            </td>
                                        </tr>

                                        <script>
                                            function check_delete_detail() {
                                                return confirm('Are you sure you want to DELETE this Recorde');
                                            }
                                        </script>

                                    <?php
                                }

                        ?>
                                    </table>
                                    <!-- </form> -->
                </div>

            </div>

        </div>

        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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