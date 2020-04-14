<?php 
require 'includes/connection.php';
if (isset($_POST['submit'])) {
    # code...
    #fetch data from webform 
    if (is_null($_GET['edit'])) {
        # code...
    $name    = $_POST['category-name'];
    $query   = "insert into category(cat_name) values('$name')";
    mysqli_query($conn,$query);
}
else{
    # code...
    $name    = $_POST['category-name'];
    $query   = "update category set cat_name=$name; where cat_id = {$_GET['edit']}";
    mysqli_query($conn,$query);
}
}
if (isset($_GET['delete'])) {
    # code...
    $query = "delete from category where cat_id = {$_GET[delete]}";
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
                        <div class="card-header">Manage Category</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Category</h3>
                            </div>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                    <input id="cc-pament" name="category-name" type="text" class="form-control" value="<?php if (isset($_GET['category_name'])){
                                        echo $_GET['category_name'];
                                    }
                                    ?>">
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
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
                                $query = " select * from category ";
                                $result = mysqli_query($conn,$query);
                                while($cat = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>{$cat['cat_id']}</td>";
                                    echo "<td>{$cat['cat_name']}</td>";
                                    echo "<td><a href='?edit={$cat['cat_id']}&category_name={$cat['cat_name']}'  name='edit' class='btn btn-info'> Edit</a></td>";
                                    echo "<td><a href='manage_category.php?delete={$cat['cat_id']}' class='btn btn-danger'>Delete</a></td>";
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
<?php include'includes/footer.php';?>