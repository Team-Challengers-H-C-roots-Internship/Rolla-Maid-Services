<?php
 require ("assets/common.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="service.css">

    <?php
        require ("assets/nav_footer_cdns.php");
    ?>

    <title>home</title>
</head>
<body>

<?php
    require ("header.php");
?>



<section id="blankSection"  style="margin-bottom: 60px">

    <div class="container">
        <div class="services">
            <h1>Our Services</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="icon">
                    <i class="fas fa-broom"></i>
                </div>
                <h3>Cleaning</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, itaque. Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Natus, laborum?</P>
                <Button class="btnn">Start</Button>
            </div>

            <div class="col-md-3">
                <div class="icon">

                    <i class="fas fa-utensils"></i>

                </div>
                <h3>Cooking</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, itaque. Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Natus, laborum?</P>
                <Button class="btnn">Start</Button>
            </div>

            <div class="col-md-3">
                <div class="icon">


                    <i class="fas fa-wheelchair"></i>

                </div>
                <h3>Elderly Care</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, itaque. Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Natus, laborum?</P>
                <Button class="btnn">Start</Button>
            </div>

            <div class="col-md-3">
                <div class="icon">

                    <i class="fas fa-baby-carriage"></i>

                </div>
                <h3>Baby Sitting</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, itaque. Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Natus, laborum?</P>
                <Button class="btnn">Start</Button>
            </div>


        </div>

</section>

<?php
    require ("footer.php");
?>

<a href="#" class="to-top">
    <i class="fa fa-arrow-up" style="font-size:36px"></i>
</a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
