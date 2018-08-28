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

$bid = $_GET['bid'];

$result = $conn->query("SELECT brand_name, bid FROM jj_inv_brands WHERE bid = $bid ");

if ($result->num_rows > 0) {

$row = mysqli_fetch_assoc($result); ?>

            <div class="container form-container">
                <div class="card mx-auto" style="width: 30rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="text-align: center">Update Brand</h2>
                                <hr>
                            </div>
                        </div>
                        <form method="post" action="process/update_brand_process.php">
                            <div class="form-group">
                                <input type="hidden" name="bid" value="<?php echo $row['bid'] ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="update_brand" class="form-control" value="<?php echo $row['brand_name']; ?>" required autofocus>
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
                                    <button type="submit" class="btn btn-primary submit-btn" name="update-brand"><i class="fas fa-sync"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php 
}
 ?>
