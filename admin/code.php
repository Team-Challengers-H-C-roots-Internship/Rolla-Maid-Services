<?php
    session_start();

    require("../assets/common.php");

    $username = $_POST['username'];
    $username = mysqli_real_escape_string($con,$username);

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);

    $mobile = $_POST['mobile_no'];
    $mobile = mysqli_real_escape_string($con,$mobile);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con,$password);

    $confirm_password = $_POST['confirmpassword'];
    $confirm_password = mysqli_real_escape_string($con,$confirm_password);

    $mobile_validation = "/^[0-9]+$/";
    $email_validation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";


    if (!($password === $confirm_password)){
        echo "<script>alert('Passwords Doesnot Match');window.location='register.php'</script>";
    }

    if (!preg_match($mobile_validation,$mobile)){
        echo "<script>alert('Please Enter a valid Mobile Number');window.location='register.php'</script>";
    }

    if (!preg_match($email_validation,$email)){
        echo "<script>alert('Please Enter a valid Email Address');window.location='register.php'</script>";
    }

    //Email Confirmation
    $sql = "SELECT * FROM users Where email = '$email'";
    $check_query = mysqli_query($con,$sql) or die(mysqli_error($con));
    $email_counter = mysqli_num_rows($check_query);

if ($email_counter != 0) {
    echo "<script>alert('Admin with this email address already exists');window.location='register.php'</script>";
    exit();
}else{
    $query = "INSERT INTO `admin_register`(`id`,`username`,`mobile_number`,`email`,`password`) VALUES (NULL,'$username','$mobile','$email','$password')";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));

    echo "<script>alert('Admin Successfully added');window.location='register.php'</script>";


}

?>
