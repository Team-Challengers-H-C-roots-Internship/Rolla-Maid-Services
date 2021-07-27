<?php
require ('../assets/common.php');
require ("includes/header.php");
require ("includes/navbar.php");
?>


    <div class="container">
        <h4>Messages from Contact Us page</h4>
        <hr />
        <div class="table-responsive">
            <?php
            $query = "SELECT * FROM messages";
            $query_run = mysqli_query($con, $query) or die(mysqli_error($con));
            ?>
            <table class="table table-bordered" style="width: 100%" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Message </th>
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
                            <td><?php  echo $row['message']; ?></td>

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