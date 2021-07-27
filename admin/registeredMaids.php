<?php
require ('../assets/common.php');
require ("includes/header.php");
require ("includes/navbar.php");
?>


    <div class="container">
        <h4>Registered Maids Page</h4>
        <hr />
        <div class="table-responsive">
            <?php
            $query = "SELECT * FROM registered_maids";
            $query_run = mysqli_query($con, $query) or die(mysqli_error($con));
            ?>
            <table class="table table-bordered" style="width: 100%" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th> ID </th>
                    <th>Category</th>
                    <th>firstName</th>
                    <th>MiddleName</th>
                    <th>LastName</th>
                    <th>Spouse Name</th>
                    <th>Date Of Birth</th>
                    <th>Aadhar Number</th>
                    <th>Phone Number</th>
                    <th>Qualification</th>
                    <th>House Number</th>
                    <th>City</th>
                    <th>Ward</th>
                    <th>LandMark</th>
                    <th>Police Station</th>
                    <th>Block</th>
                    <th>Sub Division</th>
                    <th>District</th>
                    <th>Pin Code</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Cook Skills</th>
                    <th>Clean Skills</th>
                    <th>Laundry</th>
                    <th>Others</th>
                    <th>Photo</th>
                    <th>Sign</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                        <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['Category']; ?></td>
                            <td><?php  echo $row['f_name']; ?></td>
                            <td><?php  echo $row['m_name']; ?></td>
                            <td><?php  echo $row['l_name']; ?></td>
                            <td><?php  echo $row['spouse_name']; ?></td>
                            <td><?php  echo $row['DOB']; ?></td>
                            <td><?php  echo $row['aadhar']; ?></td>
                            <td><?php  echo $row['phone']; ?></td>
                            <td><?php  echo $row['qualification']; ?></td>
                            <td><?php  echo $row['house_no']; ?></td>
                            <td><?php  echo $row['city']; ?></td>
                            <td><?php  echo $row['ward']; ?></td>
                            <td><?php  echo $row['landmark']; ?></td>
                            <td><?php  echo $row['policeStation']; ?></td>
                            <td><?php  echo $row['block']; ?></td>
                            <td><?php  echo $row['subDivision']; ?></td>
                            <td><?php  echo $row['district']; ?></td>
                            <td><?php  echo $row['pincode']; ?></td>
                            <td><?php  echo $row['state']; ?></td>
                            <td><?php  echo $row['country']; ?></td>
                            <td><?php  echo $row['gender']; ?></td>
                            <td><?php  echo $row['cookSkills']; ?></td>
                            <td><?php  echo $row['cleanSkills']; ?></td>
                            <td><?php  echo $row['laundry']; ?></td>
                            <td><?php  echo $row['Others']; ?></td>
                            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'"/>'; ?></td>
                            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['sign'] ).'"/>'; ?></td>

                            <!--  <td><?php  echo $row['photo']; ?></td> -->
                            <!-- <td><?php  echo $row['sign']; ?></td> -->
                           
                            <td>
                                <form action="register_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </form>
                            </td>
                            <td>
                                <form action="code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else {
                    echo "No Record Found";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>





<?php
require ("includes/scripts.php");
require ("includes/footer.php");
?>