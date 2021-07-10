<?php
    require ("assets/common.php");
    if ($_SESSION){
        echo "<script>alert('You already have a session up and running please continue to home page by clicking ok button');window.location='home.php' </script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Index | Rolla Maid Services</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="nav_footer_styles.css" type="text/css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://kit.fontawesome.com/debf789820.js" ></script>

        <!---stylesheet link-->
        <link rel="stylesheet" href="/home.css">
        <link rel="stylesheet" href="/chat.css">
    </head>
    <body>
    <?php
        require ("header.php");
    ?>

    <div class="container">
        <div class="loader_bg">
            <div class="loader_img">
                <img src="./images/rozowa_laseczka_v2.gif" alt="image">
            </div>
            <div class="head">
                <h1 data-text="We Will Provide You The Best Maid..... " class="h1">We Will Provide You The Best Maid.....</h1>
            </div>
        </div>
    </div>

    <?php
        require ("footer.php");
    ?>

    </body>
</html>
