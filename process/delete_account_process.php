<?php 	
include_once '../includes/dbh.inc.php';

$id = $_POST['id'];	

if (isset($_POST['submit-delete-account'])) {

	$conn->query("DELETE FROM jj_inv_account WHERE id = $id");
	header('Location: ../manage_account.php');
}
 ?>