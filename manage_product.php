<?php
//include header
include_once 'includes/header.php';

//include navbar
include_once 'navigation_bar.php';
?>

<?php 
//include database connection
include_once 'includes/dbh.inc.php';
 ?>

 <?php 
include_once 'update_product_modal.php';
  ?>

<?php

include_once 'delete_product_modal.php';


?>
<div class="container searchbar">
	<div class="row">
	    <div class="col-md-4 offset-md-8">
	        <div class="input-group">
	            <input class="form-control py-2 border-right-0 border" type="search" placeholder="Type a product name" id="search">
	            <span class="input-group-append">
	                    <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
	            </span>
	        </div>
	    </div>
	</div>

<!-- Display table -->
	<?php  

	$limit = 5;  
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
	$start_from = ($page-1) * $limit;  
  

	$result = $conn->query("SELECT pro.product_id, pro.category_id, pro.brand_id, cat.category_name, bra.brand_name, pro.product_name, pro.product_price, pro.product_stock, pro.added_date, pro.remarks FROM jj_inv_categories AS cat, jj_inv_brands as bra ,jj_inv_products AS pro
	  WHERE cat.cid=pro.category_id AND bra.bid=pro.brand_id ORDER BY product_id ASC LIMIT $start_from, $limit");

	if ($result->num_rows > 0) {?>

	<div class="table-container">
	  <div class="row">
	    <div class="col-md-12">
	      <table class="table table-bordered" id="mytable">
	        <thead>
	          <tr>
	            <th scope="col">#</th>
	            <th scope="col">Category</th>
	            <th scope="col">Brand</th>
	            <th scope="col">Product</th>
	            <th scope="col">Price</th>
	            <th scope="col">Stock</th>
	            <th scope="col">Date</th>
	            <th scope="col">Status</th>
	            <th scope="col" colspan="2">Action</th>
	          </tr>
	        </thead>
	        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
	        <tbody>
	          <tr>
	            <th scope="row"><?php echo $row['product_id']; ?></th>
	            <td><?php echo $row['category_name']; ?></td>
	            <td><?php echo $row['brand_name']; ?></td>
	            <td><?php echo $row['product_name']; ?></td>
	            <td><?php echo $row['product_price']; ?></td>
	            <td><?php echo $row['product_stock']; ?></td>
	            <td><?php echo $row['added_date']; ?></td>
	            <td><a href="#" class="btn btn-success btn-sm"/>Active</a></td>
	            <td>
	               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update-product" data-p_id="<?php echo $row['product_id']; ?>" data-product_name="<?php echo $row['product_name']; ?>" data-c_id="<?php echo $row['category_id']; ?>" data-b_id="<?php echo $row['brand_id'];?>" data-product_price="<?php echo $row['product_price']; ?>" data-product_stock="<?php echo $row['product_stock']; ?>" data-remarks="<?php echo $row['remarks']; ?>">Edit</button>
	            </td>
	            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-product" data-product_id="<?php echo $row['product_id']; ?>" >
	              <span class="fa fa-trash"></span> Delete</button><br></td>
	          </tr>
	        </tbody>
	        <?php
	        } 
	        ?>
	      </table>
	    </div>
	  </div>
	</div>

	<?php  
	}
	?>


</div>

<?php 
include_once 'product_paginaton.php';
 ?>



<script type="text/javascript">
	// Write on keyup event of keyword input element
   $(document).ready(function(){
     $("#search").keyup(function(){
     _this = this;
    
     // Show only matching TR, hide rest of them
     $.each($("#mytable tbody tr"), function() {
       if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
       {  
           $(this).hide();
       }
       else
       {
 	       $(this).show();
       }
     });
  });
});
</script>


</body>
</html>
