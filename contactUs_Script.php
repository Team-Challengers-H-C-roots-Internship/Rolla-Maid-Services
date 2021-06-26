<?php
    require ("assets/common.php");

    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con,$name);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);
    $message = $_POST['message'];

    $query = "INSERT INTO `messages` (`id`,`name`, `email`, `message`) VALUES (NULL ,'$name', '$email', '$message')";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));

    echo "<script>alert('Messaged Successfully sent! Thanks for response');window.location='contactUs.php'</script>";

//    header('location:index.php');

?>