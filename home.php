<?php
    require ("assets/common.php");
    if (!$_SESSION){
        echo "<script>alert('You dont have permission to view home page without logging in go to login page by clicking ok button');window.location='login.php' </script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | Rolla Maid Services</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="nav_footer_styles.css" type="text/css">

        <link rel="stylesheet" href="home.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="chat.css">
    </head>
    <body>
    <?php
        require ("header.php");
    ?>
    <?php
    require ("header.php");
    ?>
    <!---main part-->
    <!----video part-->
    <header class="header" id="header">
        <div class="banner">
            <h1 class="banner_title">House & Office Cleaning Service</h1>
            <div class="btn">
                <button class="btn">
                    <a class="atag" href="Service.php">Start Search</a>
                </button>
            </div>
        </div>
        <article class="video_container">
            <video class="video_item" autoplay muted loop>
                <source src="/images/pexels-tima-miroshnichenko-6195516.mp4"
                        type="video/mp4">
            </video>
        </article>
        <!--nav btn-->
        <div class="navBtn">
            <i class="fas fa-bars"></i>
        </div>
        <!--end of nav btn-->


        <!--end of nav-->
        <!---video switch-->
        <div class="video_switch-container">
            <div class="video_switch">
                <span class="span">on</span>
                <span class="span">off</span>
                <div class="video_switch-btn"></div>
            </div>
        </div>
        <!--end of video switch-->
    </header>
    <!---Chat bot-->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible"
                style="font-size: 25px;">Chat With Us!
            <i id="chat-icon" style="color: #fff;font-size: 30px;" class="fa
                    fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!---message container-->
                <div class="outer-container">
                    <div class="chat-container">
                        <!---message-->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading....</span></p>
                        </div>
                        <!---user input-->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input type="text" id="textInput"
                                       class="input-box" name="msg"
                                       placeholder="Tap 'Enter' to send a
                                        message">
                                <p></p>
                            </div>
                            <div class="chat-bar-icon">
                                <i id="chat-icon" style="color: crimson;"
                                   class="fa fa-fw fa-heart"
                                   onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;"
                                   class="fa fa-fw fa-send"
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
    <!---end of video part-->

    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-img">
                        <img
                                src="./images/young-woman-with-rubber-gloves-ready-clean.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6" style="margin-left: 70px; margin-top:
                        30px;">
                    <div class="about-text" style="margin-left: 30px;
                            margin-top: 30px;">
                        <h1>We Can Make Your Place Sparkle</h1>
                        <p class="para"> sparking cleaning is a social enterprise that aims to create employment opprtunites for the domestic workers.</p>
                        <p class="para"> we will be providing best housemaid services like baby sitter, namy& domestic help services cook,sercives servent baby care governess patient care, care,drive,office staff,peon& housemaid agency in Nagpur.We have experienced candidates who gives satisfacation and best result.</p>


                        <button >
                            <a class="btn" href="About.php" >Read More ...</a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!---How It works-->

        <section class="header-extradiv">
            <div class="container heading text-center">
                <h1 class="text-center font-weight-bold" style="padding-bottom: 3%; font-size: 5rem;">How does It Work? </h1>
                <div class="row" >
                    <div class=" extra-div col-lg-4 col-md -4 col-12" >
                        <a href="#"><i class="fa-3x fa fa-search" aria-hidden="true"></i></a>
                        <h2> Search</h2>
                        <p style="font-size: 1.5rem;"> Use our simple search and tell us what you require. See list of all Avaliable maids in your Area </p>


                    </div>

                    <div class=" extra-div col-lg-4 col-md -4 col-12">
                        <a href="#"><i class="fa-3x fa fa-user-circle-o" aria-hidden="true"></i></a>
                        <h2  > Shortlist</h2>
                        <p style="font-size: 1.5rem;">View the Complete profile of the hundresd of available maids and shortlist as pre your prefrence</p>


                    </div>

                    <div class=" extra-div col-lg-4 col-md -4 col-12">
                        <a href="#"><i class="fa-3x fa fa-handshake-o" aria-hidden="true"></i></a>
                        <h2> Meet, Select & Relax </h2>
                        <p style="font-size: 1.5rem;">Talk to the maid on the phone or meet her personally.Select the maid and pay only after the maid joins </p>


                    </div>

                </div>

            </div>


        </section>
        <br>

        <!----why us-->
        <div >
            <div class="container" style="background-color: transparent;">
                <h1  style="color: black;font-size: 6rem;text-align: center;padding-bottom: 20px;">Why Us</h1>
                <div class="row">
                    <div class="col-sm-4" style="border-right: 1px solid black; height: 190px;align-items: center;justify-content: center;">
                        <img alt="Italian Trulli" src="./images/why-icon1.png" style="margin-left: 150px;align-items: center;justify-content: center;">
                        <p style="margin-top: 10px; color: black; text-align: center;font-size: 2.2rem;">Quick & Easy</p>
                        <p style="margin-top: 10px;color: black;font-size: 1.5rem;text-align: center;">No need to wait for maid to come for
                            interview.Search-View profile-Select</p>
                    </div>
                    <div class="col-sm-4" style="border-right: 1px solid black; height: 190px">
                        <img alt="Italian Trulli" src="./images/why-icon2.png" style="margin-left: 150px;">
                        <p style="margin-top: 10px; color: black; text-align: center;font-size: 2.2rem;">Safe & Reliable</p>
                        <p style="margin-top: 10px;color: black;font-size: 1.5rem;text-align: center;">Your safety is our first priority.we do a thorough
                            background check of every maid</p>

                    </div>
                    <div class="col-sm-4">
                        <img alt="Italian Trulli" src="./images/why-icon3.png" style="margin-left: 150px;">
                        <p style="margin-top: 10px; color: black;text-align: center;font-size: 2.2rem;">Multiple Options</p>
                        <p style="margin-top: 10px;color: black;font-size: 1.5rem;text-align: center;">Watch as many profiles as you want.Select only the one
                            you find best</p>

                    </div>

                </div>
                <hr style="margin-bottom: 50px;margin-top: 40px">
                <div class="row" style="padding-top: 10px">
                    <div class="col-sm-4" style="border-right: 1px solid black; height: 190px; ">
                        <img alt="Italian Trulli" src="./images/why-icon4.png" style="margin-left: 150px;">
                        <p style="margin-top: 10px; color: black;text-align: center;font-size: 2.2rem;">High Quality</p>
                        <p style="margin-top: 10px;color: black;font-size: 1.5rem;text-align: center;">Only skilled minds are registered with us</p>
                    </div>

                    <div class="col-sm-4" style="border-right: 1px solid black; height: 190px; ">
                        <img alt="Italian Trulli" src="./images/why-icon5.png" style="margin-left: 150px;">
                        <p style="margin-top: 10px; color: black; text-align: center;font-size: 2.2rem;">Free Replacement</p>
                        <p style="margin-top: 10px;color: black;font-size: 1.5rem;text-align: center;">if the maid leaves for any reason within 6 months of
                            joining
                            ,we will replace the maid.No questions asked</p></div>
                    <div class="col-sm-4">
                        <img alt="Italian Trulli" src="./images/why-icon6.png" style="margin-left: 150px;">
                        <p style="margin-top: 10px; color: black; text-align: center;font-size: 2.2rem;">Service</p>
                        <p style="margin-top: 10px;color: black;font-size: 1.5rem;text-align: center;">We are not just another maid agency.We have strong
                            ethics and customers comes first!</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!----we are offering-->
        <div class="bg_color">
            <h1 class="offer">What We Are Offering...</h1>
            <br>
            <div class="container" >
                <div class="row" >
                    <div class="col" >
                        <div class="main">
                            <div class="service">
                                <div class="service_logo">
                                    <img src="./images/icons8-broom-50.png" alt="image">
                                </div>
                                <h3 class="h3tag">Cleaning</h3>
                                <p style="font-size: 1.5rem;">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam voluptatibus,
                                </p>
                            </div>
                            <div class="shadowOne"></div>
                            <div class="shadowTwo"></div>
                        </div>
                    </div>
                    <div class="col" >
                        <div class="main">
                            <div class="service">
                                <div class="service_logo">
                                    <img src="./images/icons8-cooking-pot-50.png" alt="image">
                                </div>
                                <h3 class="h3tag">Cooking</h3>
                                <p style="font-size: 1.5rem;">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam voluptatibus,
                                </p>
                            </div>
                            <div class="shadowOne"></div>
                            <div class="shadowTwo"></div>
                        </div>
                    </div>
                    <div class="col" >
                        <div class="main">
                            <div class="service">
                                <div class="service_logo">
                                    <img src="./images/icons8-elderly-person-48.png" alt="image">
                                </div>
                                <h3 class="h3tag">Elderly Care</h3>
                                <p style="font-size: 1.5rem;">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam voluptatibus,
                                </p>
                            </div>
                            <div class="shadowOne"></div>
                            <div class="shadowTwo"></div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div style="background-color: white;height: 30px;"></div>
            <!---trust and safety-->
            <br><br>
            <div class="jumbotron" style="background-color: #33CCFF;text-align: center;">
                <p style="font-size: 45px; color:white;">We're big on trust & safety</p>
                <p style="font-size: 15px; color:white;">Maids go through an extensive vetting process before they listed below</p>
                <div class="container" style=" margin-top: 40px;">
                    <div class="row">
                        <div class=" col-sm-3">
                            <img alt="Identity Check" src="https://www.bookmybai.com/images/Identity-check.png" style="font-size: 10%;">
                            <p style="margin-top: 10px; color:white">Identity check</p>
                        </div>
                        <div class="col-sm-3">
                            <img alt="Criminal Record" src="/images/Criminal-record-check.png ">
                            <p style="margin-top: 10px; color: white;">Document verification</p>
                        </div>
                        <div class="col-sm-3">
                            <img alt="In Person Interview" src="/images/In-person-interview.png ">
                            <p style="margin-top: 10px; color: white;">In-person-interview</p>
                        </div>
                        <div class="col-sm-3">
                            <img alt="Training Session" src="/images/Training-session.png ">
                            <p style="margin-top: 10px; color: white;">Training-session</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-----hired button-->
            <div class="hired">
                <h1>Ready to hire a maid ?
                    <button >
                        <a class="btn" href="#" >Start Search</a>
                    </button>
                </h1>
            </div>
            <br><br>

            <!---end of main part-->
            <!---footer-->

            <!---scrolltotop button-->

            <a href="#" class="to-top">
                <i class="fa fa-arrow-up" style="font-size:36px"></i>
            </a>

            <!---javascript links-->
            <script src="/js/main.js"></script>
            <script src="/js/app.js"></script>
            <script src="/js/chat.js"></script>
            <script src="/js/response.js"></script>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



            <?php
        require ("footer.php");
    ?>
    </body>
</html>
