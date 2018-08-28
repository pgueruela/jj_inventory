<?php

include 'includes/header.php';
include_once 'includes/dbh.inc.php';


if ($_SESSION['user_type']== 'Admin') {
include_once 'admin_navigation_bar.php';

$id = $_SESSION['user_id'];

$result = $conn->query("SELECT * FROM jj_inv_account WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<!-- Dashboard for JJ Inventory Management System -->
<div class="container">
        <div class="row card-container">
            <div class="col-md-4">
                <div class="card mx-auto">
                  <img class="card-img-top mx-auto" style="width:60%;" src="/images/profile_image.png" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Profile Info</h4>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo " ". $row['fullname']; ?></p>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo " ". $row['email']; ?></p>
                     <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo " ". $row['user_type']; ?></p>

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update-profile" data-id="<?php echo $row['id']; ?>" data-fullname="<?php echo $row['fullname']; ?>" data-username="<?php echo $row['username']; ?>" data-email="<?php echo $row['email']; ?>"><i class="fa fa-edit"></i>
                     Edit</button>
                  </div>
                </div>
            </div>
                          
            <div class="col-md-8">
                <div class="card mx-auto">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Dashboard </h4>
                    <hr>
                    <!-- Image Dashboard logo -->
                    <img class="card-img-top mx-auto" width="50" height="330" src="/images/dashboard-logo.png" alt="Card image cap">
                  </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>

    <div class="container">
        <div class="row sub-card-container">
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Categories</h4>
                        <p class="card-text">Here you can manage your categories and you can add new parent and sub categories</p>
                        <a href="#" data-toggle="modal" data-target="#add_category" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                        <a href="manage_categories.php" class="btn btn-success"><i class="fa fa-cog">
                        </i> Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Brands</h4>
                        <p class="card-text">Here you can manage your brand and you can add new brand</p>
                        <a href="#" data-toggle="modal" data-target="#add_brands" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                        <a href="manage_brand.php" class="btn btn-success"><i class="fa fa-cog">
                        </i> Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <p class="card-text">Here you can manage your prpducts and you add new products</p>
                        <a href="#" data-toggle="modal" data-target="#add_product" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                        <a href="manage_product.php" class="btn btn-success"><i class="fa fa-cog">
                        </i> Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
}

?>

<?php
if ($_SESSION['user_type']=='Other') {

include_once 'navigation_bar.php';


$id = $_SESSION['user_id'];

$result = $conn->query("SELECT * FROM jj_inv_account WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<!-- Dashboard for JJ Inventory Management System -->
<div class="container">
        <div class="row card-container">
            <div class="col-md-4">
                <div class="card mx-auto">
                  <img class="card-img-top mx-auto" style="width:60%;" src="/images/profile_image.png" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Profile Info</h4>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo " ". $row['fullname']; ?></p>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo " ". $row['email']; ?></p>
                     <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo " ". $row['user_type']; ?></p>

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update-profile" data-id="<?php echo $row['id']; ?>" data-fullname="<?php echo $row['fullname']; ?>" data-username="<?php echo $row['username']; ?>" data-email="<?php echo $row['email']; ?>"><i class="fa fa-edit"></i>
                     Edit</button>
                  </div>
                </div>
            </div>
                          
            <div class="col-md-8">
                <div class="card mx-auto">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Dashboard </h4>
                    <hr>
                    <!-- Image Dashboard logo -->
                    <img class="card-img-top mx-auto" width="50" height="330" src="/images/dashboard-logo.png" alt="Card image cap">
                  </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>

    <div class="container">
        <div class="row sub-card-container">
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Categories</h4>
                        <p class="card-text">Here you can manage your categories and you can add new parent and sub categories</p>
                        <a href="#" data-toggle="modal" data-target="#add_category" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                        <a href="manage_categories.php" class="btn btn-success"><i class="fa fa-cog">
                        </i> Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Brands</h4>
                        <p class="card-text">Here you can manage your brand and you can add new brand</p>
                        <a href="#" data-toggle="modal" data-target="#add_brands" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                        <a href="manage_brand.php" class="btn btn-success"><i class="fa fa-cog">
                        </i> Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <p class="card-text">Here you can manage your prpducts and you add new products</p>
                        <a href="#" data-toggle="modal" data-target="#add_product" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                        <a href="manage_product.php" class="btn btn-success"><i class="fa fa-cog">
                        </i> Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

?>


<?php 
//Category modal form
include_once 'add_category.php';
?>

<?php
//Brand modal form 
include_once 'add_brands.php';
?>

<?php
//Product modal form 
include_once 'add_prod.php';
?>

<?php 
include_once 'update_profile.php';
 ?>




