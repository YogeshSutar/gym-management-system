<?php
session_start();
require("dbconnect.php");
// require 'nav.php';
// $query = "DELETE FROM `plan_user` WHERE `end_time`< CURRENT_TIMESTAMP";
// $query_runn = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style12.css">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .button {
            background-color: #fbfbfb;
            border: none;
            color: black;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button3 {
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            padding: 5%;
        }

        .button3:hover {
            background: #ddff00;
            transition: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            box-shadow: 0 0 20px 0px rgba(255, 250, 250, 0.5);
        }

        .main-buttons {
            padding-left: 11.5%;
            padding-bottom: 5%;
            background-color: rgb(0 0 0 / 86%)
        }

        .sub-buttons button {
            margin: 12px;
            align-content: center;

        }

        .sub-buttons img {
            width: 130px;
            height: 130px;
        }

        .item {
            width: 800px;
            height: 500px;
            align-items: center;
            margin-left: 200px;
        }

        @media(max-width: 700px) {
            .row1 {
                flex-direction: column;
            }

            .about-col1 img {
                height: 450px;
                width: 120%;
                margin-left: -5%;
            }

            .about-col1 h1 {
                font-size: 4vh;
                width: 120%;
                margin-left: 1%;
            }

            .main-buttons h1 {
                margin-left: -11%;
            }
        }
    </style>



</head>






<?php


require 'nav.php';
?>

<body>
    <div>
        <!-- <img href="about.php"  src="images/logo.jpg"  alt="" width="90px" height="60"> -->
        <!-- <img class="header" src="images/relax2.jpg" alt=""></img> -->
        <!-- <header class="slider" style=" background-image: url(images/relax2.jpg)"></header> -->
        <header class="silder" style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.4)),url(images/home.jpg) no-repeat center;     background-size: cover;">

            <div class="mahesh">
                <h1> WELCOME TO OUR FITNESS CLUB</h1>
                <p>Join with us to contacting with us<br>let's do it fast</p>
                <br><a href="courseG.html" class="rakesh" style="text-decoration:none">OUR PLANS</a>
            </div>
    </div>
    <!-- <section class="header">
        <nav>
            <label class="logo" >SAMARTH  FITNESS  GYM </label>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                
                <ul class="header1">
                    <li><a href="Index.html">Home</a></li>
                    <li><a href="aboutG.html">About</a></li>
                    <li><a href="courseG.html">Course</a></li>
                    <li><a href="Contact-UsG.html">Contact Us</a></li>

                </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class="mahesh">
        <h1 > WELCOME TO OUR FITNESS CLUB</h1>
        <p>Join with us to contacting with us<br>let's do it fast</p>
        <br><a href="courseG.html" class="rakesh">OUR PROGRAMS</a>
    </div>
    </section> -->

    <!--- Small Information -->

    <section class="about-us1">
        <div class="row1">

            <div class="about-col1">
                <img src="images/arnold.jpg" alt="">
            </div>


            <div class="about-col1">

                <h1>Make Yourself Stronger <br>than your best excuses</h1>

                <p style="margin-left: 2%;">we are dominated last five year at the top of all the IT services.<br>
                    <br>
                <div class="columns1">

                    <h2><b>1. Be Patient</b></h2>
                    <p>Etiam non nulla idlorem tristique suscipit. <br> Pellentesq dictum erate pretium.</p>

                    <h2><b>2. Training Hard</b></h2>
                    <p>Etiam non nulla idlorem tristique suscipit. <br> Pellentesq dictum erate pretium.</p>

                    <h2><b>3. Be Strong</b></h2>
                    <p>Etiam non nulla idlorem tristique suscipit. <br> Pellentesq dictum erate pretium.</p>


                </div>
            </div>

        </div>

    </section>

    <div class="main-buttons">
        <h1 style="padding-left: 40%; font-size: 5vh; color: aliceblue; padding-top: 5%; padding-bottom: 2%;">Varieties</h1>
        <div class="sub-buttons">

            <button class="button button3"><img src="images/yoga.png" alt=""><br>
                <h3>Yoga </h3>
            </button>
            <button class="button button3"><img src="images/Functional.png" alt="">
                <h3>Functional</h3>
            </button>
            <button class="button button3"><img src="images/cardio.png" alt="">
                <h3>Cardio</h3>
            </button>
            <button class="button button3"><img src="images/personal-train.png" alt="">
                <h3>Trainer</h3>
            </button>
        </div>
        <div class="sub-buttons">
            <button class="button button3"><img src="images/day-night.png" alt="">
                <h3>Time</h3>
            </button>
            <button class="button button3"><img src="images/Uni.png" alt="">
                <h3>Unisex</h3>
            </button>
            <button class="button button3"><img src="images/strength.png" alt="">
                <h3>Strength</h3>
            </button>
            <button class="button button3"><img src="images/dumbbel2.png" alt="">
                <h3>Musculation</h3>
            </button>
        </div>

    </div>




    <!-- END -->




    <!----------------------   course  ----------------------
    <section class="course">
        <h1>FEE STRUCTURE</h1>
        <p>The following are our Fee structure list </p>
    
    
        <div class="row">
            <div class="columns">
                <h1>Personal Training</h1>
                <h3>____/-</h3>
                <p>All of our personal training programs begin with an in-depth consultation with the client to fully understand their fitness goals, their struggles, and their current lifestyle habits. This is the first 50% of data collecting we do to start constructing your plan.</p>
            </div>

            <div class="columns">
                <h1>1 Month</h1>
                <h3>____/-</h3>
                <p>For one month we acquire that amount</p>
            </div>
    
            <div class="columns">
                <h1>3 Month</h1>
                <h3>_____/-</h3>
                <p>Pay 2 months fee and get 1 month free <br>500 + 500 + 500 (individual 1 month fee) = 1500 <br>1000 (direct 3 month subscribtion) <br>you are saving 500/-</p>
            
                
            </div>
        </div>
    
        
        <div class="row">
            <div class="columns">
                <h1>Half Year</h1>
                <h3>_____/-</h3>
                <p></p>
            </div>
    
            <div class="columns">
                <h1>Annual Training</h1>
                <h3>_____/-</h3>
                <p></p>
            </div>
        </div>
        
    
        <section>
            <h3>For More Information of This Training</h3>
            <a class="rakesh comment-submit" href="Contact-UsG.html">Contact Us</a>
        </section>
    </section>
    --->


    <!----------------- Our Facilities    --------------->
    <h1 class="slidertitle">Best Workouts</h1>
    <div class="sliderimage">
        <div class="sliderwrapper">
            <img class="sliderpicture" src="images/back.jpg" alt="">
            <img class="sliderpicture" src="images/ronnieleg.jpg" alt="" height="20px">
            <img class="sliderpicture" src="images/ronniebiceps.jpg" alt="">
            <img class="sliderpicture" src="images/triceps.jpg" alt="">
            <!-- <img class="sliderpicture" src="images/relax2.jpg" alt=""> -->
            <!-- <img class="sliderpicture" src="images/relax2.jpg" alt="">
            <img class="sliderpicture" src="images/gymlogin.jpg" alt="">
            <img class="sliderpicture" src="images/relax2.jpg" alt=""> -->
        </div>
    </div>

    <!--  <section class="facilities">
        <h1 style="font-size: 6vh;">GYM Structure</h1>
        <p>this is our facility . you are like to know our facilities.</p>
    
        <div class="row">
            <div class="facili-col">
                <img src="images/library.jfif" alt="">
                <h3>Best class library</h3>
                <p>this is our library. this best in the world.</p>
            </div>
            <div class="facili-col">
                <img src="images/facility.jfif" alt="">
                <h3>Best Facilated lab </h3>
                <p>this is our library. this best in the world.</p>
            </div>
            <div class="facili-col">
                <img src="images/Good_staf.jpg" alt="">
                <h3>Best Experienced Teaching Staff </h3>
                <p>this is our library. this best in the world.</p>
            </div>
        </div>
    </section>

-->
    <!--------------  this is our Trainer section in our website  --------------->
    <section class="campus">
        <h1>Our Trainers</h1>
        <div class="row">
            <div class="campimg">
                <img src="images/london.jfif" alt="">
                <div class="layer">
                    <h1>Moreshwar Kamble Bhau</h1>

                </div>
            </div>

            <div class="campimg">
                <img src="images/uae.jfif" alt="">
                <div class="layer">
                    <h1>Vishal Jadhav Sir</h1>

                </div>
            </div>

            <div class="campimg">
                <img src="images/USA.jfif" alt="">
                <div class="layer">
                    <h1>Rasik Salunke Sir</h1>

                </div>
            </div>
        </div>
    </section>


    <!----------------  testimonials  ----------------->

    <section class="testimonials">
        <h1>SAMARTH FITNESS GYM</h1>
        <p> </p>
        <div class="testcol1">
            <img src="images/moreshwar kamble.jpeg">
            <div>
                <p>Owner Of the SAMARTH FITNESS GYM<br> </p>
                <h3>Moreswar Kamble Sir</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="row">
            <div class="testcol">
                <img src="images/vishal jadhav.jpeg">
                <div>
                    <p>Trainer of the SAMARTH FITNESS GYM<br> </p>
                    <h3>Vishal Jadhav Sir</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>

            <div class="testcol">
                <img src="images/rasik salunke.jpeg">
                <div>
                    <p>Trainer of the SAMARTH FITNESS GYM</p>
                    <h3>Rasik Salunke Sir</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
        </div>


    </section>




    <!-------------------  Call to Action  ------------------->
    <section class="cta">
        <h1> Enroll For SAMARTH FITNESS GYM<br> Anywere From The World</h1>
        <a href="Contact-UsG.html">Contact Us</a>
    </section>

    <!--------------   Footer   ------------->

    <?php
    include "footer.php";
    ?>


    <!-----------------  javascript for toogle menu  ----------------->

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>




</body>

</html>