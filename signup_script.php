<?php
    require "assets/common.php";

    $name = $_POST["name"];
    $name = mysqli_real_escape_string($con,$name);

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con,$password);
    $password  = md5($password);

    $mobile = $_POST['mobile'];
    $mobile = mysqli_real_escape_string($con,$mobile);

    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con,$address);

    $area = $_POST['area'];
    $area = mysqli_real_escape_string($con,$area);

    $landmark = $_POST['landmark'];
    $landmark = mysqli_real_escape_string($con,$landmark);

    $city = $_POST['city'];
    $city = mysqli_real_escape_string($con,$city);


    //    Checking for left idle form elements
    if (empty($name) || empty($email) || empty($password) || empty($mobile) || empty($address) || empty($area) || empty($landmark) || empty($city)){
        echo "<script>alert('Please Fill all Fields in order to submit')window.location='signup.php'</script>";
        exit();
    }

    $mobile_validation = "/^[0-9]+$/";
    $email_validation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";

    if (!preg_match($mobile_validation,$mobile)){
        echo "<script>alert('Please Checkout your mobile number');window.location='signup.php'</script>";
        exit();
    }
    if (!preg_match($email_validation,$email)){
        echo "<script>alert('Please Checkout Your Email Address');window.location='signup.php'</script>";
        exit();
    }
    if (strlen($password) < 9 ){
        echo "<script>alert('Please Choose a password of length not less than 9 characters');window.location='signup.php'</script>";
        exit();
    }
    $sql = "SELECT * FROM users Where email = '$email'";
    $check_query = mysqli_query($con,$sql) or die(mysqli_error($con));
    $email_counter = mysqli_num_rows($check_query);

    if ($email_counter != 0){
        echo "<script>alert('User with this email address already exists');window.location='login.php'</script>";
        exit();
    }else{
        $query = "Insert into `users`(`id`,`name`,`email`,`password`,`mobile_no`,`address`,`area`,`landmark`,`city`) values (NULL ,'$name','$email','$password','$mobile','$address','$area','$landmark','$city')";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        echo "<script>alert('User Successfully Created with `$name` and `$email`.Enjoy the service')</script>";
        $_SESSION["id"] = mysqli_insert_id($con);
        $_SESSION["name"] = $name;


        header('location:home.php');
    }


?>