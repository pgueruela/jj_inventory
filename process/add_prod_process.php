<?php 


if (isset($_POST['submit-btn'])) {

	include_once 'includes/dbh.inc.php';
 	
	$category_id = $_POST['select_category'];
	$brand_id = $_POST['select_brand'];
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_quantity = $_POST['product_quantity'];
	$added_date = $_POST['added_product_date'];
	$remarks = $_POST['remarks'];


	$sql = "SELECT * FROM jj_inv_products WHERE product_name = '$product_name'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		echo "<script type='text/javascript'>alert('Cannot be duplicate the product name')</script>";
		exit();

	}else{


		$sql = "INSERT INTO jj_inv_products (category_id, brand_id, product_name, product_price, product_stock, added_date, remarks)
		VALUES($category_id, $brand_id, '$product_name', $product_price, $product_quantity,'$added_date', '$remarks'); ";

		if ($conn->query($sql) === TRUE) {
	    	echo "<div id='message'>
	    		  	<div style='padding:5px;'>
	    		  		<div id='inner-message' class='alert alert-primary alert-dismissible fade show ' role='alert'><strong>New product has been successfully created!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
	    		  		</div>
	    		  	</div>
	    		  </div>"; 	
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}


?>

<script type="text/javascript">
	
</script>