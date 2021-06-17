<?php
require ("assets/common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con,$email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);
$password = md5($password);

$query = "SELECT id,email FROM users WHERE email = '".$email."' AND password = '".$password."'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num == 0){
    echo "<script>alert('Please Checkout your email address or password');window.location='login.php'</script>";
}else{
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location:home.php');
}
?>