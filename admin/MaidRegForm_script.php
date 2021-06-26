<?php
    require ("../assets/common.php");
    $f_name = $_POST['first_name'];
    $f_name = mysqli_real_escape_string($con,$f_name);

    $m_name = $_POST['middle_name'];
    $m_name = mysqli_real_escape_string($con,$m_name);

    $l_name = $_POST['last_name'];
    $l_name  = mysqli_real_escape_string($con,$l_name);

    $father_spouse_name = $_POST['father_name'];
    $father_spouse_name = mysqli_real_escape_string($con,$father_spouse_name);

    $DOB = $_POST['birthday'];
    $DOB = mysqli_real_escape_string($con,$DOB);

    $aadhar = $_POST['aadhar'];
    $aadhar = mysqli_real_escape_string($con,$aadhar);

    $phone = $_POST['phone'];
    $phone = mysqli_real_escape_string($con,$phone);

    $qualification = $_POST['heq'];
    $qualification = mysqli_real_escape_string($con,$qualification);

    $house_no = $_POST['hn'];
    $house_no = mysqli_real_escape_string($con,$house_no);

    $village_or_colony = $_POST['vc'];
    $village_or_colony = mysqli_real_escape_string($con,$village_or_colony);

    $ward_no = $_POST['wn'];
    $ward_no = mysqli_real_escape_string($con,$ward_no);

    $landMark = $_POST['lm'];
    $landMark = mysqli_real_escape_string($con,$landMark);

    $policeStation = $_POST['ps'];
    $policeStation = mysqli_real_escape_string($con,$policeStation);

    $block = $_POST['block'];
    $block = mysqli_real_escape_string($con,$block);

    $subDivision = $_POST['sd'];
    $subDivision = mysqli_real_escape_string($con,$subDivision);

    $district = $_POST['District'];
    $district = mysqli_real_escape_string($con,$district);

    $pinCode = $_POST['pin_code'];
    $pinCode = mysqli_real_escape_string($con,$pinCode);

    $state = $_POST['state'];
    $state = mysqli_real_escape_string($con,$state);

    $country = $_POST['country'];
    $country = mysqli_real_escape_string($con,$country);

    $gender = $_POST['gender'];
//    echo $gender;


    $cooking_skill = $_POST['cooking_skill'];
    foreach ($cooking_skill as $cookSkill){
//        echo $cookSkill;
    }

    $cleaning_skill = $_POST['cleaning_skill'];
//    echo $cleaning_skll;
    foreach ($cleaning_skill as $clean_skill){
//        echo $clean_skill;
    }

    $laundry = $_POST['laundry'];
//    echo $laundry;

    foreach ($laundry as $clothesWash){
//        echo $clothesWash;
    }

    $others = $_POST['others'];
//    echo $others;
    foreach ($others as $other_work){
//        echo $other_work;
    }

    //Category
    $category = $_POST['category'];

    //File Uploads of Photo and Signature

    $photo = addslashes(file_get_contents($_FILES["upload_Photo"]["tmp_name"]));
    $sign = addslashes(file_get_contents($_FILES["upload_Sign"]["tmp_name"]));


    $query = "INSERT INTO `registered_maids` (`id`, `Category`, `f_name`, `m_name`, `l_name`, `spouse_name`, `DOB`, `aadhar`, `phone`, `qualification`, `house_no`, `city`, `ward`, `landmark`, `policeStation`, `block`, `subDivision`, `district`, `pincode`, `state`, `country`, `gender`, `cookSkills`, `cleanSkills`, `laundry`, `Others`,`photo`,`sign`) VALUES (NULL, '$category', '$f_name', '$m_name', '$l_name', '$father_spouse_name', '$DOB', '$aadhar', '$phone', '$qualification', '$house_no', '$village_or_colony', '$ward_no', '$landMark', '$policeStation', '$block', '$subDivision', '$district', '$pinCode', '$state', '$country', '$gender', '$cookSkill', '$clean_skill', '$clothesWash', '$other_work','$photo','$sign')";

    $result = mysqli_query($con,$query) or die(mysqli_error($con));


echo "<script>alert('Maid Successfully Registed with $l_name.$f_name  and will be contacted Soon');window.location='MaidRegForm.php'</script>";


?>

