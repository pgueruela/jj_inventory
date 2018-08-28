<?php 

 if (isset($_POST['add-brand'])) {
	
	$brand = $_POST['add_brand'];

	include_once 'includes/dbh.inc.php';

	$sql = "SELECT * FROM jj_inv_brands WHERE brand_name = '$brand'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		echo "<script type='text/javascript'>alert('Cannot be duplicate the brand name')</script>";
		exit();

	}else{

		$sql1 = "INSERT INTO jj_inv_brands (brand_name)
		VALUES('$brand'); ";

		if ($conn->query($sql1) === TRUE) {
    	echo "<div id='message'>
    		  	<div style='padding:5px;'>
    		  		<div id='inner-message' class='alert alert-primary alert-dismissible fade show ' role='alert'><strong>New brand has been successfully created!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
    		  		</div>
    		  	</div>
    		  </div>";
		} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

}



