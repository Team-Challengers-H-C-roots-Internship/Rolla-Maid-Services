<?php
    require ("assets/common.php");
?>
<html>
    <head>
        <title>
            Contact Us || Rolla Maid Services
        </title>

        <?php
            require ("assets/bootstrap_cdn.php");
        ?>

        <link rel="stylesheet" href="nav_footer_styles.css" type="text/css">
    </head>
    <body>
    <?php
        require ("header.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col col-lg-6" style="margin-top: 80px" >
                <img src="images/contact.png" class="img-fluid" >
            </div>
            <div class="col col-lg-6">
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
        <div class="footer">
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/login" class="fa fa-twitter"></a>
        </div>
    </div>
    </body>

    <?php
        require ("footer.php");
    ?>

    </body>
</html>
