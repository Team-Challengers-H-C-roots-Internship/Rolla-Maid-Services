<?php
require ('../assets/common.php');
require ("includes/header.php");
require ("includes/navbar.php");
?>


    <div class="container">
        <h4>User Profiles</h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
            Add User
        </button>
        <hr />
        <div class="table-responsive">
            <?php
            $query = "SELECT * FROM users";
            $query_run = mysqli_query($con, $query) or die(mysqli_error($con));
            ?>
            <table class="table table-bordered" style="width: 100%" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Username </th>
                    <th>Email </th>
                    <th>Password</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Area</th>
                    <th>Land Mark</th>
                    <th>City</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
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
                            <td><?php  echo $row['name']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['password']; ?></td>
                            <td><?php  echo $row['mobile_no']; ?></td>
                            <td><?php  echo $row['address']; ?></td>
                            <td><?php  echo $row['area']; ?></td>
                            <td><?php  echo $row['landmark']; ?></td>
                            <td><?php  echo $row['city']; ?></td>

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

        <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="addUser.php" method="POST">

                        <div class="modal-body">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                                <small class="error_email" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Your Address">
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <input type="text" name="area" class="form-control" placeholder="Enter Area">
                            </div>
                            <div class="form-group">
                                <label>LandMark</label>
                                <input type="text" name="landmark" class="form-control" placeholder="Enter LandMark">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter City">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>





<?php
require ("includes/scripts.php");
require ("includes/footer.php");
?>