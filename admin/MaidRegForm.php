<?php
    require("../assets/common.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">

    <!-- Title Page-->
    <title>Maid Registration Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">



</head>

<body>


<div class="header" style="margin-top: 100px;">

    <center>
        <span class="center_word">Maid Registration Form</span>


    </center>

</div>



<style>
    .center_word {
        text-transform: uppercase;
        font-size: 35px;
        /* font-size: ; */
        font-weight: bolder;
        color: darkgreen;
    }

    div.amount {
        width: 130px;
        height: 60px;
        /* background-color: yellow; */
        color: red;
        font-size: 45px;
        border: black 1px solid;
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
    }
</style>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">


    <div class="wrapper wrapper--w680">

        <div class="card card-4">
            <div class="card-body">

                <form method="POST" action="MaidRegForm_script.php" enctype="multipart/form-data">
                    <div class="row row-space">
                        <div class="col-3">
                            <div class="input-group">
                                <h2 class="title">Registration Form</h2>
                            </div>
                            <br>
                        </div>

                        <div class="col-3" style="font-size: 20px;">
                            Category
                            <select name="category">
                                <label for="" class="label">Select State</label>
                                <option value="">Choose</option>
                                <option value="">-------</option>

                                <option value="Part Time Maid">Part Time Maid</option>

                                <option value="Full Time Maid">Full Time Maid</option>

                                <option value="Live-in Maid">Live-in Maid</option>
                            </select>

                        </div>

                    </div>
                    <br><br>
                    <div class="row row-space">
                        <!-- <br> -->
                        <div class="col-1">
                            <div class="input-group form-group">
                                <label class="label">first name</label>
                                <input class="input--style-4 form-control" type="text" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="input-group form-group">
                                <label class="label">middle name</label>
                                <input class="input--style-4 form-control" type="text" name="middle_name" required>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="input-group form-group">
                                <label class="label">last name</label>
                                <input class="input--style-4 form-control" type="text" name="last_name" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label">father's/spouse's Name</label>
                                <input class="input--style-4 form-control" type="text" name="father_name" required>
                            </div>
                            <br>
                        </div>


                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label">DOB</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker form-control" type="text" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group mb-3">
                                <label for="">Gender</label> <br>
                                <input type="radio" name="gender" value="Male" checked  /> Male
                                <input type="radio" name="gender" value="Female" /> Female
                                <input type="radio" name="gender" value="Other" /> Other
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label">Aadhar  Number</label>
                                <input class="input--style-4 form-control" type="text" name="aadhar" required>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4 form-control" type="text" name="phone" required>
                            </div>
                        </div>
                    </div>




                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label">Highest Educational Qualification:</label>
                                <input class="input--style-4 form-control" type="text" name="heq" required>
                            </div>
                        </div>

                    </div>
                    <b style="font-size:20px"><u>Address:</u></b>

                    <div class="row row-space">

                        <div class="col-2">

                            <div class="input-group form-group">

                                <label class="label">House No:</label>
                                <input class="input--style-4 form-control" type="text" name="hn" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group form-group">
                                <label class="label">Village/Colony:</label>
                                <input class="input--style-4 form-control" type="text" name="vc" required>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label">Ward Number:</label>
                                <input class="input--style-4 form-control" type="text" name="wn" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group form-group">
                                <label class="label">Land Mark:</label>
                                <input class="input--style-4 form-control" type="text" name="lm" required>
                            </div>
                        </div>

                    </div>
                    <div class="row row-space">

                        <div class="col-3">

                            <div class="input-group form-group">

                                <label class="label">Police Station::</label>
                                <input class="input--style-4 form-control" type="text" name="ps" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group form-group">
                                <label class="label">Block:</label>
                                <input class="input--style-4 form-control" type="text" name="block" required>
                            </div>
                        </div>
                        <div class="col-2">

                            <div class="input-group form-group">

                                <label class="label">Sub-Division:</label>
                                <input class="input--style-4 form-control" type="text" name="sd" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label"> District:</label>
                                <input class="input--style-4 form-control" type="text" name="District" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group form-group">
                                <label class="label"> Pin Code:</label>
                                <input class="input--style-4 form-control" type="text" name="pin_code" required>
                            </div>
                        </div>


                        <div class="col-3">
                            <div class="input-group form-group">
                                <label class="label">State:</label>
                                <input class="input--style-4 form-control" type="text" name="state" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-3">
                            <div class="input-group form-group">
                                <label class="label"> Country:</label>
                                <input class="input--style-4 form-control" type="text" name="country" required>
                            </div>
                        </div>
                    </div>

                    <b style="font-size:20px"><u>Skills:</u></b><br>
                        <!--Cooking Style-->
                    <b style="font-size:18px"><u>Cooking:</u></b><br>

                    <div class="form-group">
                        <input type="checkbox" name="cooking_skill[]" value="Veg"> Veg <br>
                        <input type="checkbox" name="cooking_skill[]" value="Non-veg"> Non-veg <br>
                        <input type="checkbox" name="cooking_skill[]" value="South_Indian"> South_Indian <br>
                        <input type="checkbox" name="cooking_skill[]" value="Chinese"> Chinese <br>
                    </div><br>
                    <!-- Cleaning Style -->
                    <b style="font-size:18px"><u>Cleaning:</u></b><br>
                    <div class="form-group">
                        <input type="checkbox" name="cleaning_skill[]" value="Bedroom Cleaning"> Bedroom Cleaning <br>
                        <input type="checkbox" name="cleaning_skill[]" value="Kitchen Cleaning"> Kitchen Cleaning <br>
                        <input type="checkbox" name="cleaning_skill[]" value="Utensils Washing"> Utensils Washing <br>
                        <input type="checkbox" name="cleaning_skill[]" value="Office Cleaning"> Office Cleaning <br>
                    </div><br>


                        <!--Laundry-->

                    <b style="font-size:18px"><u>Laundry:</u></b><br>
                    <div class="form-group">
                        <input type="checkbox" name="laundry[]" value="Washing Clothes"> Washing Clothes <br>
                        <input type="checkbox" name="laundry[]" value="Ironing Clothes"> Ironing Clothes <br>
                    </div><br>
                    <!-- Others -->

                    <b style="font-size:18px"><u>Others:</u></b><br>
                    <div class="form-group">
                        <input type="checkbox" name="others[]" value="BabySitting"> BabySitting <br>
                        <input type="checkbox" name="others[]" value="ElderlCare"> ElderlCare <br>
                    </div><br>


                    <div class="p-t-15">
                        <label class="label"> <b>Upload Photo:</b></label>
                        <input type="file" id="myFile" name="upload_Photo">
                        <br><br>
                        <label class="label"> <b>Upload Signature:</b>
                        </label>
                        <input type="file" id="myFile" name="upload_Sign">
                        <br><br>
                        <div class="form-group">
                            <button name="submit_btn" class="btn btn--radius-2 btn--blue form-control" type="submit">Submit</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .download {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        /* margin: 4px 2px; */
        cursor: pointer;
    }
</style>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body>

</html>
