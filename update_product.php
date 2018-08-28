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

$pid = $_GET['pid'];

$result = $conn->query("SELECT pro.product_id,  pro.product_name, cat.category_name, bra.brand_name, pro.product_price, pro.product_stock, pro.remarks FROM jj_inv_categories AS cat, jj_inv_brands as bra ,jj_inv_products AS pro
    WHERE pro.product_id=$pid ");

if ($result->num_rows > 0) {

$row = mysqli_fetch_assoc($result); ?>
<div class="container form-container">
    <div class="card mx-auto" style="width: 30rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center">Update Product</h2>
                    <hr>
                </div>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Product name</label>
                            <input type="text" name="update-pn" class="form-control" placeholder="Enter product name">
                        </div>
                    </div>
                </div>

                <?php 
                              //Include database connection
                              include_once 'includes/dbh.inc.php';
                              ?>

                    <!-- Option for categories -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category-selection">Category</label>
                                <select class="form-control" id="category-selection" name="update-c">
                                    <option>Choose Category</option>
                                    <?php 

                                                      $sql = "SELECT * FROM jj_inv_categories";
                                                       $result = mysqli_query($conn, $sql);

                                                      while ($row = mysqli_fetch_assoc($result)) { ?>

                                        <option value="<?php echo $row['cid']; ?>">
                                            <?php 
                                                              echo $row['category_name'];
                                                           ?>
                                        </option>
                                        <?php
                                                  }
                                                   ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Option for brands -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="brand-selection">Brand</label>
                                <select class="form-control" id="brand-selection" name="update-c">
                                    <option>Choose Brand</option>
                                    <?php
                                                  $sql = "SELECT * FROM jj_inv_brands";
                                                  $result = mysqli_query($conn, $sql);

                                                  while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $row['bid']; ?>">
                                            <?php echo $row['brand_name']; ?>
                                        </option>
                                        <?php 
                                                  }
                                                  ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="number" name="update-price" class="form-control" placeholder="Enter product price">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="number" name="update-quantity" class="form-control" placeholder="Enter product quantity">
                            </div>
                        </div>
                    </div>

                    <!-- textarea -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Remarks</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="update_remarks" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="submit-btn">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php 
}
 ?>