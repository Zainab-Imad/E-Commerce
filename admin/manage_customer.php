<?php include('includes/header.php');?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Customer</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add customer</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Name</label>
                                    <input id="cc-pament" name="admin-email" type="text" class="form-control">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Customer Email</label>
                                    <input id="cc-password" name="admin-password" type="password" class="form-control cc-name valid">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Mobile</label>
                                    <input id="cc-pament" name="admin-fullname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Address</label>
                                    <input id="cc-pament" name="admin-fullname" type="text" class="form-control">
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info">Save
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
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td><a href="#" class="btn btn-info">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>