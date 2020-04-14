<?php 
# Make code run when click save button 
require 'includes/connection.php';
if (isset($_POST['submit'])) {
    # code...
    #fetch data from webform 
    $email    = $_POST['admin-email'];
    $password = $_POST['admin-password'];
    $fullname = $_POST['admin-fullname'];
    
    $query = "update admin set  admin_email    = '$email' ,
                           admin_password = '$password' ,
                           admin_fullName = '$fullname'
            where admin_id = {$_GET['id']}";
    mysqli_query($conn,$query);
    header("location:manage_admin.php");
}
$query  = "select * from admin where admin_id = {$_GET['id']}";
$result = mysqli_query($conn,$query);
$admin  = mysqli_fetch_assoc($result);

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
                                    <input id="cc-pament" name="admin-email" type="text" class="form-control"
                                    value="<?php echo $admin['admin_email']; ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Admin Passowrd</label>
                                    <input id="cc-password" name="admin-password" type="password" class="form-control cc-name valid"
                                    value="<?php echo $admin['admin_password']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                    <input id="cc-pament" name="admin-fullname" type="text" class="form-control"
                                    value="<?php echo $admin['admin_fullName']; ?>">
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info">Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>