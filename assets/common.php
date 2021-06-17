<?php
    $con = mysqli_connect('localhost',"root","","rolla_maid_service") or die(mysqli_error($con));

    if (!isset($_SESSION)){
        session_start();
    }
?>