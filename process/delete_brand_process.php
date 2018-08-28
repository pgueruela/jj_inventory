<?php 	
include_once '../includes/dbh.inc.php';

$bid = $_POST['b_id'];	

if (isset($_POST['submit-delete-brand'])) {

	$conn->query("DELETE FROM jj_inv_brands WHERE bid = $bid");
	header('Location: ../manage_brand.php');
}
 ?>