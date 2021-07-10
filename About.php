<?php
    require ("assets/common.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="About.css">
    <title>About Us Page</title>
</head>
<body>

<div class="container">
    <div class="text">
        <h1>ABOUT US </h1>
        <br><br>
        <p>
        <p class="para"> sparking cleaning is a social enterprise
            that aims to create employment opprtunites for the
            domestic workers.</p>
        <p class="para"> we will be providing best housemaid
            services like baby sitter, namy& domestic help
            services,cook,sercives,servent,baby
            care,governess,patient care, care,drive,office
            staff,peon& housemaid agency in Nagpur.We have
            experienced candidates who gives satisfacation and best
            result.</p>
        <p class="para"> our main aim is to extened a helping hand
            and to provide the best professiona; assistance to
            thousands od houses wives,working women and others
            related to the day-to-day assistance in genreal cleaning
            requirments.</p>
        <p class="para">
            We ensure that training is provided to the workers so
            that they fit the lifestyle and mannerism of our
            clients.
        </p>
        </p>
    </div>
    <div class="img">

    </div>
    <button class="btn">
        <?php
            if ($_SESSION){
        ?>
        <a href="home.php">Back</a>
        <?php
            }else{
        ?>
        <a href="index.php">Back</a>
        <?php
            }
        ?>
    </button>
</div>
</body>
</html>
