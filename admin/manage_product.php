<?php 
# Make code run when click save button 
require 'includes/connection.php';
if (isset($_POST['submit'])) {
    # code...
    #fetch data from webform 
    $name    = $_POST['product-name'];
    $price = $_POST['product-price'];
    $img = $_POST['product-image'];
    $decs = $_POST['product-desc'];
    $cat =$_POST['category-name'];
    $query = "insert into product(pro_name,pro_price,pro_image,pro_desc,cat_name) values('$name','$price','$img','$decs','$cat')";
    mysqli_query($conn,$query);
}
if (isset($_GET['id'])) {
    # code...
    $query = "delete from product where pro_id = {$_GET['id']}";
mysqli_query($conn,$query);
}
?>
<?php include 'includes/header.php'; ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Product</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Products</h3>
                            </div>
                            <hr>
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                    <input id="cc-pament" name="product-name" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product Price</label>
                                    <input id="cc-pament" name="product-price" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product Image</label>
                                    <input id="cc-pament" name="product-image" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product Description</label>
                                    <input id="cc-pament" name="product-desc" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product category</label>
                                    <select name="category-name" style="padding: 10px;">
                                        <?php $query = " select * from category ";
                                        $result = mysqli_query($conn,$query);
                                        while($category = mysqli_fetch_assoc($result)){
                                            echo "<option>{$category['cat_name']}</option>";}?></select>
                                </div>
                                <div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info">Save
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
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>image</th>
                                    <th>desc</th>
                                    <th>Category type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = " select * from product ";
                                $result = mysqli_query($conn,$query);
                                while($pro = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>{$pro['pro_id']}</td>";
                                    echo "<td>{$pro['pro_name']}</td>";
                                    echo "<td>{$pro['pro_price']}</td>";
                                    echo "<td>{$pro['pro_image']}</td>";
                                    echo "<td>{$pro['pro_desc']}</td>";
                                    echo "<td>{$pro['cat_id']}</td>";
                                    echo "<td><a href='#' class='btn btn-info'> Edit</a></td>";
                                    echo "<td><a href='manage_product.php?id={$pro['pro_id']}' class='btn btn-danger'>Delete</a></td>";
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
<?php include 'includes/footer.php'; ?>