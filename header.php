<nav class="navbar navbar-expand-lg navbar-light fixed-top shift">

    <?php
        if ($_SESSION){
    ?>

    <a class="navbar-brand" href="home.php"><img src="images/housekeeping.png" width="50" height="50" class="d-inline-block align-top" alt="">Rolla Maid Services</a>

    <?php
        }else{
    ?>
    <a class="navbar-brand" href="index.php"><img src="images/housekeeping.png" width="50" height="50" class="d-inline-block align-top" alt="">Rolla Maid Services</a>
    <?php
        }
    ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php
                if ($_SESSION){
            ?>
            <li class="nav-item active">
                <a class="nav-link " href="home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
                }else{
            ?>
                <li class="nav-item active">
                    <a class="nav-link " href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
            <?php
                }
            ?>

            <li class="nav-item active">
                <a class="nav-link " href="#"><i class="fas fa-address-card"></i> About</a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-clipboard-list"></i> Our Services <i class="fas fa-caret-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fas fa-broom"></i> Cleaning</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-utensils"></i> Cooking</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-baby-carriage"></i> Baby Sitting</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-wheelchair"></i> Elderly Care</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link =" href="contactUs.php"><i class="fas fa-id-badge"></i> Contact Us</a>
            </li>

            <?php
                if (!$_SESSION){
            ?>

            <li class="nav-item active">
                <a class="nav-link " href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            <?php
                }else{
            ?>
            <li class="nav-item active">
                <a class="nav-link " href="logout.php"><i class="fas fa-sign-in-alt"></i> Logout</a>
            </li>
            <?php
                }
            ?>

        </ul>
    </div>
</nav>



