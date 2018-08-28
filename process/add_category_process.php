<?php 

include_once 'includes/header.php';

 if (isset($_POST['add-category'])) {
	
	$category = $_POST['add_category'];

	include_once 'includes/dbh.inc.php';


	$sql = "SELECT * FROM jj_inv_categories WHERE category_name = '$category'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		echo "<script type='text/javascript'>alert('Cannot be duplicate the category name')</script>";
		exit();

	}else{

		$sql = "INSERT INTO jj_inv_categories (category_name)
		VALUES('$category');";

		if ($conn->query($sql) === TRUE) {
	    	echo "<div id='message'>
	    		  	<div style='padding:5px;'>
	    		  		<div id='inner-message' class='alert alert-primary alert-dismissible fade show ' role='alert'><strong>New category has been successfully created!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
	    		  		</div>
	    		  	</div>
	    		  </div>";
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

 ?>

