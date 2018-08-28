<?php 	
include_once '../includes/dbh.inc.php';

$cid = $_POST['c_id'];	

if (isset($_POST['submit-delete-category'])) {

	$conn->query("DELETE FROM jj_inv_categories WHERE cid = $cid");
	header('Location: ../manage_categories.php');
}
 ?>