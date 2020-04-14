<?php 
# Make code run when click save button 
require 'includes/connection.php';
if (isset($_POST['submit'])) {
    # code...
    #fetch data from webform 
    $email    = $_POST['admin-email'];
    $password = $_POST['admin-password'];
    $fullname = $_POST['admin-fullname'];
    
    $query = "insert into admin(admin_email,admin_password,admin_fullName) values('$email','$password','$fullname')";
    mysqli_query($conn,$query);
}

?>
<?php include('includes/header.php'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                    <input id="cc-pament" name="admin-email" type="text" class="form-control">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Admin Passowrd</label>
                                    <input id="cc-password" name="admin-password" type="password" class="form-control cc-name valid">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                    <input id="cc-pament" name="admin-fullname" type="text" class="form-control">
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info">Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                	<div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Full Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = " select * from admin ";
                                $result = mysqli_query($conn,$query);
                                while($admin = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>{$admin['admin_id']}</td>";
                                    echo "<td>{$admin['admin_email']}</td>";
                                    echo "<td>{$admin['admin_fullName']}</td>";
                                    echo "<td><a href='edit_admin.php?id={$admin['admin_id']}' class='btn btn-info'> Edit</a></td>";
                                    echo "<td><a href='delete_admin.php?id={$admin['admin_id']}' class='btn btn-danger'>Delete</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>