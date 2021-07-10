<?php
    require ("assets/common.php");
?>

<?php
require "assets/common.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="nav_footer_styles.css">

<!--    <link rel="stylesheet" type="text/css" href="index.css">-->
    <title>Contact Us</title>
</head>
<style>
    body{

    }
    .col img{
        padding-top: 170px;
    }
    h1{
        text-align: center;
        color: #007bff;
    }
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;

        color: white;
        text-align: center;
    }
    .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
    }

    /* Add a hover effect if you want */


    /* Set a specific color for each brand */

    /* Facebook */
    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    /* Twitter */
    .fa-twitter {
        background: #55ACEE;
        color: white;
    }




</style>
<body>
<div class="container">
    <?php
        require ("header.php");
    ?>
    <div class="row">
        <div class="col" >
            <img src="images/contactus_image.jpeg" class="img-fluid" >
        </div>
        <div class="col">
            <div class="mb-3" style="margin-top : 100px;">
                <h1>CONTACT-US</h1>
                <form method="POST" action="contactUs_Script.php">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                    </div>
                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Enter Message</label>
                        <textarea placeholder="Enter Message" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require ("footer.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
