<?php 	
include_once '../includes/dbh.inc.php';

$product_id = $_POST['product_id'];	

if (isset($_POST['submit-delete-product'])) {

	$conn->query("DELETE FROM jj_inv_products WHERE product_id = $product_id");
	header('Location: ../manage_product.php');
}
 ?>