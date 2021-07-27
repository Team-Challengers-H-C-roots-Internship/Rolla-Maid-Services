<?php
require ('../assets/common.php');
require ("includes/header.php");
require ("includes/navbar.php");
?>

<div class="container">
    <h4>Admin Profiles</h4>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
        Add Admin Profile
    </button>
    <hr />
    <div class="table-responsive">
        <?php
        $query = "SELECT * FROM admin_register";
        $query_run = mysqli_query($con, $query) or die(mysqli_error($con));
        ?>
        <table class="table table-bordered" style="width: 100%" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th> ID </th>
                <th> Username </th>
                <th>Email </th>
                <th>Password</th>
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
                        <td><?php  echo $row['username']; ?></td>
                        <td><?php  echo $row['email']; ?></td>
                        <td><?php  echo $row['password']; ?></td>
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
                <form action="code.php" method="POST">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                            <small class="error_email" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile Number">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
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