<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="home.css">

  <!-- style CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/6cba7c1ded.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="path/to/fontawesome.min.css"> -->
  <style>
    /* * {
        
        padding: 0px;

 
    } */

    /* .nav {
         width: 100vw;
margin-bottom:20px;
        position:sticky;
z-index: 100;
        top:0px; 
         
    
    } */

    /* .lib {
      z-index: 100;
        position: relative;
        right: 60em;
        bottom: 0px;
        font-size: 15px;
    } */



    /* a {

        text-decoration: none; */
    /* margin-right:3rem; */
    /* } */
    /* #firstname{
      float: left;
      font-weight: 20px;
      font-size: 25px;
    } */
    .div1 {
      z-index: 100;
    }

    .profile {
      /* margin: 10px; */
      font-weight: 100;
    }

    .profile1 {
      color: white;
      margin: 10px;
      font-size: 20px;
    }

    .profile1:hover {
      transition: 0.5s;
      color: red;

      /* padding-left: 10px; */
    }

    .planyouhave {
      color: white;
      font-size: 20px;
      padding-left: 15px;
      transition: 0.3s;
    }

    .planyouhave:hover {

      color: red;
    }

    table {
      margin-left: 15px;
      border-collapse: collapse;
      width: 90%;

    }

    .table_profile{
      text-align: center;
      border: 1px solid #dddddd;
      padding: 8px;
      color: white;
    }

    /* .table_profile:hover {
      transition: 0.4s;
      color: red;
    } */
    #td_profile{
      color: white;
      font-weight: bolder;
    }
    #td_profile:hover{
      transition: 0.4s;
      color: red;
    }

    .users_detail {
      color: white;
      padding: 10px;
      transition: 0.3s;
    }

    .users_detail:hover {
      color: red;
    }

    /* tr:nth-child(even) {


background-color: #dddddd;
} */
  </style>

</head>

<body>
  <!-- <div class="container11"> -->
  <!-- <video autoplay muted id="video1" class="video1">
            <source src="photo/video/HOME.mp4" type="video/mp4">
        </video> -->
  <!-- <header class="silder"> -->
  <style>
    .headingname {
      color: white;
      font-size: 36px;
      padding: 60px;
      padding-top: 5px;
      position: inherit;
    }
  </style>


  <div class="div1">

    <nav class="navbar123" id="navbarhiddencolor" style="z-index: 99999;">
      <?php
      if (isset($_SESSION['adminusername']) == true) {
        echo '<nav class="navbar123" id="navbarhiddencolor" style="background:black;">';
      }
      ?>
      <img href="about.php" src="images/logo.jpg" alt="" name="navheadimg" width="90px" height="60">

      <h class="headingname" id="navheadname" name="headline">Samarth Fitness</h>
      <ul>
        <!-- <li id="firstname">
                <a id="firstname"  class='link' href='about.php' >Knowledge Library</a>
            </li> -->
        <li>
          <a class="link" href="index.php" style="text-decoration: none;">HOME</a>
        </li>
        <li>
          <a class="link" href="fitness.php" style="text-decoration: none;">FITNESS</a>
        </li>
        <li>
          <a class="link" href="about.php" style="text-decoration: none;">ABOUT US</a>
        </li>

        <?php
        require('dbconnect.php');
        // session_start();
        if (isset($_SESSION['username'])) {
          echo '<li >
            <a class="link" href="comment.php" style="text-decoration: none;">CONTACT US</a>
             </li>';
          echo '
             <li >
             <a class="link" href="logout.php" style="text-decoration: none;">LOG-OUT</a>
             </li> ';
             
          echo ' <li>
             <a class="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="text-decoration:none;">PROFILE</a>
             </li>
             <div style="background: linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.8)),url(images/profilimg.jpg) no-repeat center; background-size: cover;" class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">';

        ?>
          <a href="inner_profile_page.php" alt="user">
            
            <img src="images/user1.png" alt="user image" style="width:10em;height:10em;">
          </a>
          <?php
          echo '<h3 id="offcanvasRightLabel" style="color:white;">Profile</h3>
           <button type="button" style="background-color: white;" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
           </div>
           <div class="offcanvas-body">';

          // echo' <div style="z-index:100;">
          // <li>
          // <a class="link"  style="margin-right:3rem;"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">profile</a>
          // </li>
          // <div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          //   <div class="offcanvas-header">';

          //      echo '<h5 id="offcanvasRightLabel" >Profile</h5>
          //     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          //   </div>
          //   <div class="offcanvas-body">
          //     ';
          //session_start();      <img src="user1.png"style="width:10em;height:10em;">

          $username = $_SESSION['username'];
          if (isset($_SESSION['username'])) {
            $sql = "SELECT * FROM `users` where `username`='$username'";
            $insert = mysqli_query($conn, $sql);
            $noofvalues = mysqli_num_rows($insert);
            while ($data = mysqli_fetch_assoc($insert)) {
              echo "
                       <div class='profile'>
                       <div class='profile1' style=''>Name : <span class='users_detail'> $data[name]<span></div>
                       
                       <div class='profile1' style=''>Username : <span class='users_detail'> $data[username] </span></div>
                       
                       
                       <div class='profile1' style=''>Email : <span class='users_detail'> $data[email]</span></div>
                       
                       <br>
                       </div>
                       ";
              $sqlb = "SELECT * FROM `plan_user` where `username`='$username'";
              $insertb = mysqli_query($conn, $sqlb);
              $noofvalues = mysqli_num_rows($insertb);
              if ($noofvalues > 0) {
                echo "<h5 class='planyouhave'>Yours Plan</h5>";

          ?>

                <table border="1">

                  <tr>
                    <th class="table_profile" style="text-align: center;">
                      Plan Name
                    </th>
                    <th class="table_profile" style="text-align: center;">
                      Duration
                    </th>
                  </tr>

                  <?php
                  while ($datab = mysqli_fetch_assoc($insertb)) {

                    $planname = $datab['plan_name'];
                    $sql = "SELECT * from `plan_user` where `end_time`>CURRENT_TIMESTAMP && `username`='$username'";
                    $insert = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($insert)) {
                      $displayplanname = $row['plan_name'];
                      $displayduration = $row['duration'];
                  ?>
                      <tr>
                        <td id="td_profile" class="table_profile">
                          <?php echo $displayplanname; ?>
                        </td>

                        <td id="td_profile" class="table_profile">
                          <?php echo $displayduration; ?>
                        </td>


                        <!-- echo $displayplanname ;
                         echo '<p>'.$displayduration   .'</p> <br>'; -->
              <?php
                    }
                  }
                } else {
                  echo "<h4 style='color:white;'>You Dont Have An Any Plan</h4>";
                }

                echo '
                     </tr>
</table>
                     </div>
                   </div>
                   </div>';
              }
            }
          } elseif (isset($_SESSION['adminusername'])) {

            echo '

          <li >
          <a class="link" href="comment.php" style="text-decoration: none;">CONTACT US</a>
          </li>';
            echo '<li >
           <a class="link" href="badminpage.php" style="text-decoration: none;" id="admin_button_navchange" onclick="hiddenname()">ADMIN PAGE</a>
           </li>';
            echo '          
           <li >
           <a class="link" href="logout.php" style="text-decoration: none;">LOG-OUT</a>
            </li>';
            echo ' <li>
           <a class="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="text-decoration:none;">PROFILE</a>
           </li>
           
           <div style="background: linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.8)),url(images/profilimg.jpg) no-repeat center;     background-size: cover;" class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
           <div class="offcanvas-header">';
           
              ?>
             

                <img src="images/user1.png" alt="Admin image" style="width:10em;height:10em;">
             
            <?php
            echo '<h3 id="offcanvasRightLabel" style="color:white;">Profile</h3>
          <button type="button" style="background-color: white;" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">';

            // echo' <div style="z-index:100;">
            // <li>
            // <a class="link"  style="margin-right:3rem;"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">profile</a>
            // </li>
            // <div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            //   <div class="offcanvas-header">';

            //      echo '<h5 id="offcanvasRightLabel" >Profile</h5>
            //     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            //   </div>
            //   <div class="offcanvas-body">
            //     ';
            //session_start();      <img src="user1.png"style="width:10em;height:10em;">

            $adminusername = $_SESSION['adminusername'];
            if (isset($_SESSION['adminusername'])) {
              $sql = "SELECT * FROM `adminlogin` where `admin_username`='$adminusername'";
              $insert = mysqli_query($conn, $sql);
              $noofvalues = mysqli_num_rows($insert);
              while ($data = mysqli_fetch_assoc($insert)) {
                echo "
                       <div class='profile'>
                       <div class='profile1' style=''>Admin Name : $data[admin_username]</div>

                       
                       <br>
                       </div>
                       ";
                //    $sqlb="SELECT * FROM `books_user` where `username`='$username'";
                //    $insertb=mysqli_query($conn,$sqlb);
                //    $noofvaluesb=mysqli_num_rows($insertb);
                //  if($noofvaluesb>0)
                //    {
                //      echo"<h5 class='bookyouhave'>Books you have</h5>";
                //    while($datab=mysqli_fetch_assoc($insertb))
                //    {
                //      $bookname=$datab['book_name'];
                //       $sql="SELECT * from `books` where `book_name`='$bookname'";
                //       $insert=mysqli_query($conn,$sql);
                //       while($row=mysqli_fetch_assoc($insert))
                //       {
                //         $pdf=$row['book_pdf'];
                //      echo ' <a href="book_pdf\\'. $pdf .'" class="profile1" style="margin:10px;  color:black;text-decoration: none;">'.$bookname.'</a><br>';
                // }// $bookname=$datab['book_name'];S
                // $sql="SELECT * FROM `books` where `book_name`='$bookname'";
                // $insert=mysqli_query($conn,$sql);
                // $data=mysqli_fetch_assoc($insert);

              }
            } else {
              echo "You Dont Have An Any Plan";
            }

            echo '
                     </div>
                   </div>
                   </div>';
          } else {
            echo '<li>
        <a class="link" style="margin-right:1em; text-decoration:none;" href="login.php" style="text-decoration: none;">LOG-IN</a>
        </li>';
          }
          // $adminusername = $_SESSION['adminusername'];
          // // $adminpassword=$_POST['adminpassword'];
          // $query = "SELECT * FROM `adminlogin` WHERE `admin_username`='$adminusername'";
          // $result = mysqli_query($conn, $query);
          // while(mysqli_fetch_assoc($result)){
          // if (mysqli_num_rows($result)) {

          //   if (isset($_SESSION['adminusername'])) {
          //     echo '<li >
          //     <a class="link" href="comment.php" style="text-decoration: none;">CONTACT US</a>
          //      </li>';
          //     echo '
          //  <li >
          //  <a class="link" href="logout.php" style="text-decoration: none;">LOG-OUT</a>
          //   </li>';
          //     //  <li class="nav-item bg-dark" style="margin-right:1em">
          //     //  <a class="nav-link active" href="logind.php">profile</a>
          //     //   </li> 

          //     echo ' <li>
          // <a class="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="text-decoration:none;">PROFILE</a>
          // </li>
          // ';

          //     echo '<li >
          // <a class="link" href="adminpage.php" style="text-decoration: none;">admin page</a>
          //  </li>';
          //   } else {
          //     echo '<li>
          // <a class="link" style="margin-right:1em; text-decoration:none;" href="login.php" style="text-decoration: none;">LOG-IN</a>
          // </li>';
          //   }
          // }
          // }
            ?>


      </ul>
      <!-- <p style="font-size: 44px;">Knowledge library</p> -->
    </nav>
  </div>
  <!-- </header> -->
  <!-- </div> -->
  <?php
  //  require 'logind.php';

  ?>
</body>

</html>