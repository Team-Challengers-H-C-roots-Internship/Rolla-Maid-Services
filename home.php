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
    </head>
    <body>
    <?php
        require ("header.php");
    ?>
    <div class="jumbotron pt-6 mb-5">
    </div>

    <section id="blankSection" >
        <h1 class="text-center">Replace with content of home page</h1>
    </section>
    <?php
        require ("footer.php");
    ?>
    </body>
</html>