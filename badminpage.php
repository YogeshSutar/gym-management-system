
<?php 
session_start();
require('dbconnect.php');
require('nav.php');

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
<style>
    #notification_count{
        font-size: 18px;
        background-color: red;
        color: white;
        border: 2px solid red;
        position:relative;
        padding: 2px;
    border-radius: 50%;
    top: -15px;
    left: -16px;
    }
</style>
</head>

<body id="page-top">
<?php


?>



    <!-- Page Wrapper -->
    <div>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position: fixed; z-index:2;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="padding-bottom:30px; padding-top:100px; margin-right:15px;" href="badminpage.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3" >Admin Page </div>
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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white  mb-3  shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    
<?php
$sqli_query="SELECT * FROM `plan_user` WHERE `status_notification`=0 && `end_time`<CURRENT_TIMESTAMP";
$run_sqli_query = mysqli_query($conn,$sqli_query);
$count = mysqli_num_rows($run_sqli_query);


?>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto" style="padding-top:50px; margin-bottom:-10px;">

                        <!-- Nav Item - Alerts -->
                        <li class="dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="admin_panel_notifications.php" role="button" style="font-size: 25px;">
                            Notification
                            <i class="fas fa-envelope fa-fw"></i>
                            <span id="notification_count"><?php echo $count; ?></span>
                            </a>
                        </li>

                        <!-- Nav Item - Messages -->
                        <!-- <li class="dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#"  role="button">
                                <i class="fas fa-envelope fa-fw"></i>
                                </a> -->





                    </ul>

                </nav>
                
                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid" style="padding-left: 280px;">
                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <h1>aaaaaaaaaaaa</h1>
                    </div>
                </div>
            </div>



            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
                    <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
        
    </div>
    <!-- End of Page Wrapper -->
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

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>