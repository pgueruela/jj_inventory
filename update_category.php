<?php 
//include header
include_once 'includes/header.php';
 ?>

<?php 
//include database connection
 include_once 'includes/dbh.inc.php';
  ?>

<?php 
//include navbar
include_once 'navigation_bar.php';
?>


<?php 

$cid = $_GET['cid'];

$result = $conn->query("SELECT category_name, cid FROM jj_inv_categories WHERE cid = $cid ");

if ($result->num_rows > 0) {

$row = mysqli_fetch_assoc($result); ?>

            <div class="container form-container">
                <div class="card mx-auto" style="width: 30rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="text-align: center">Update Cateogry</h2>
                                <hr>
                            </div>
                        </div>
                        <form method="post" action="process/update_category_process.php">
                            <div class="form-group">
                                <input type="hidden" name="cid" value="<?php echo $row['cid'] ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="update_category" class="form-control" value="<?php echo $row['category_name']; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" class="form-control" value="Active" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary submit-btn" name="update-category"><i class="fas fa-sync"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php 
}
 ?>

 