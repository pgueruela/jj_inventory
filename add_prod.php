<!--  Modal for adding product -->

<div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
            <form method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Date</label>
                      <input type="text" name="added_product_date" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly/>
                    </div>  
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">  
                      <label>Product name</label>
                      <input type="text" name="product_name" class="form-control" placeholder="Enter product name" required/>
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
                      <select class="form-control" id="category-selection" name="select_category">
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
                      <select class="form-control" id="brand-selection" name="select_brand">
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
                     <input type="number" name="product_price" class="form-control" placeholder="Enter product price" required/>
                  </div>
                  </div>
               </div>  

               <div class="row">
                  <div class="col-md-12">
                   <div class="form-group">  
                     <label>Product Quantity</label>
                     <input type="number" name="product_quantity" class="form-control" placeholder="Enter product quantity" required/>
                  </div>
                  </div>
               </div>  

                <!-- textarea -->
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                       <label for="exampleFormControlTextarea1">Remarks</label>
                       <textarea class="form-control" id="exampleFormControlTextarea1" name="remarks" rows="4" required/></textarea>
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
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php 
include_once 'process/add_prod_process.php';
 ?>
