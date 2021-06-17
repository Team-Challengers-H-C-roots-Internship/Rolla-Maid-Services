<?php
    require ("assets/common.php");

    if ($_SESSION){
        echo "<script>alert('You already have a session up and running please continue to home page by clicking ok button');window.location='home.php'</script>";
    }
?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Re - Rolla Maid Services</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript'
            src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <link href="nav_footer_styles.css" rel="stylesheet" type="text/css">
    <?php
        require ("assets/bootstrap_cdn.php");
    ?>
</head>

<!--class='snippet-body'-->
<body>
<?php
    require ("header.php");
?>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto" style="margin-top: 30px">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="https://i.ibb.co/By1LvB2/1604763720590.jpg" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                src="https://i.ibb.co/5vcdmtD/professional-cleaning-service-team-duties-accessories-flat-composition-with-man-woman-uniform-sweepi.jpg"
                                class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">REGISTER</small>
                        <div class="line"></div>
                    </div>
                    <form action="signup_script.php" method="post">
                    <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Full Name</h6>
                        </label> <input class="mb-4 form-control" type="text" name="name"
                                        placeholder="Enter a valid full name" required> </div>

                    <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4 form-control" type="text" name="email"
                                        placeholder="Enter a valid email address" required> </div>

                        <div class="row px-3 form-group"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Mobile Number</h6>
                            </label> <input class="mb-4 form-control" type="text" name="mobile"
                                            placeholder="Enter a valid Mobile Number" required> </div>


                        <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input class="form-control" type="password" name="password" placeholder="Enter password" required> </div>
                    <br>
                    <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Address</h6>
                        </label> <input class="mb-4 form-control" type="text" name="address" placeholder="Enter a valid address" required>
                    </div>

                    <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Area</h6>
                        </label> <input class="mb-4 form-control" type="text" name="area" placeholder="Enter a valid area" required>
                    </div>

                    <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Landmark</h6>
                        </label> <input class="mb-4 form-control" type="textarea" name="landmark" placeholder="Enter a valid Landmark" required>
                    </div>

                    <div class="row px-3 form-group"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">City</h6>
                        </label> <input class="mb-4 form-control" type="textarea" name="city" placeholder="Enter a valid city" required>
                    </div>
                    <br>
                    <div class="row mb-3 px-3 form-group"> <button type="submit"
                                                        class="btn btn-primary text-center form-control">Register</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold" >Have an
                            Account? <a class="text-danger " href="login.php">Login</a></small> </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<script type='text/javascript'></script>
<?php
    require ("footer.php");
?>
</body>

</html>