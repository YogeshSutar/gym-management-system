<?php
    require 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>this about page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>

    <link rel="stylesheet" href="static/allcss/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body style="background-color: rgb(221, 209, 209);">
    <section class="new-header">

        <!-- <nav>
            <label class="logo">SAMARTH FITNESS GYM</label>
            <div class="nav-links for-about" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                
                <ul class="header1">
                    <li><a href="Index.html">Home</a></li>
                        <li><a href="aboutG.html">About</a></li>
                        <li><a href="courseG.html">Course</a></li>
                        <li><a href="Contact-UsG.html">Contact Us</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav> -->
    <div class="mahesh">
        <h1> About Us</h1>

    </div>
    </section>


    <!-------- About us Content ---------->


    <section class="ptag">

        <div class="bes">
            <h1>ABOUT OUR SERVICES</h1>
            <br>
            <p class="paragraph">
                Welcome to impetus, a place that  is not only happening in  all respects but also  offers cerebral delights that ensure  a refined and enriching life experience,
                that leads  to the achievement of  the desired goals and  aspirations. You are here to  scale new heights and reach  the pinnacle of success and accomplishments. 
                Deemed  to be  university is renowned  for its academic excellence and  innovative teaching methodology.  Education and  learning imparted here  are world-class,
                coupled with excellent infrastructural  facilities. The renowned  philanthropist educationalist  has contributed  significantly to expand and raise the level of
                education and healthcare in India. A truly world-class  educational institution with  solid-state of the art infrastructure, stands to be one of the best in the
                country. <br> <br>
    
                The University has a curriculum designed by  experts that  can prepare  students for leadership roles in society. The principal objective of the courses offered 
                here is to provide  a solid foundation for the students’ future, keeping  in mind the constantly growing needs  and challenges of  the industry and society. The 
                programs offered  here, are not just static set of directives for the  present, but a dynamic framework of analytical skills and intellectual tools that will be 
                as valuable twenty years hence, as they are, immediately after graduation <br><br>
                
                We are now all set to venture into online education to carry the legacy of ‘accessible education’ forward. An emergent trend in the landscape of academics which
                a lot of individuals, professionals,students are opting for is online education. This approach helps harness their optimum potential which is carefully designed 
                optimally curated academic programs. We aim to offer the best academic exposure to people
            </p><br><br>
    
    
        </div>
        


        <hr><br>

        <h2>VISION</h2>
        <br><p class="pres">Achieving excellence through value based quality education in continual learning environment.</p>
    </section>
    <br><br><br>
    <hr>





    <section class="about-us">
        <div class="row">
            <div class="about_col">
                <h1>We are worlds one of the IT service </h1>
                <p>we are dominated last five year at the top of all the IT services.<br>
                    We have best teachers to teach students.If students/parents have<br>
                    any doubt they can ask frequntly. Our thought is their is no one<br>
                    student having any kind of doubts. So ask when doubt occurs.</p>
                <a href="Contact-UsG.html" class="rakesh Bro">CONTACT US</a>
            </div>

            <div class="about-col">
                <img src="images/student.jfif" alt="">
            </div>
        </div>

    </section>

<!------  This Footer For Giving Social media link To the User-------->

    <section class="Footer">
        <hr>
        <h4>Follow Us on</h4>
        <p>
            you can ask us with clicking this Follow us link. </p>
            <div class="icons">
                <i class="fa fa-star" ></i>
                <i class="fa fa-facebook" ></i>
                <i class="fa fa-twitter" ></i>
                <i class="fa fa-instagram" ></i>
                <i class="fa fa-linkedin" ></i>
            </div>
            <hr>
    </section>


<!----------  We Are Using JavaScript Again For Menu Bar   ---------->

    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>




        <!-- CHAT BAR BLOCK -->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chat with us!
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
            </button>
    
            <div class="content">
                <div class="full-chat-block">
                    <!-- Message Container -->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!-- Messages -->
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>
    
                            <!-- User input box -->
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Tap 'Enter' to send a message">
                                    <p></p>
                                </div>
    
                                <div class="chat-bar-icons">
                                    <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                        onclick="heartButton()"></i>
                                    <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                        onclick="sendButton()"></i>
                                </div>
                            </div>
    
                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>
    
                        </div>
                    </div>
    
                </div>
            </div>
    
        </div>
    




</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts/chat.js"></script>
<script src="scripts/responses.js"></script>
</html>