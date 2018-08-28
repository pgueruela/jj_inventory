


<?php 
//include header
include_once 'includes/header.php';

//include navbar
include_once 'navigation_bar.php';

//update modal
include_once 'update_category_modal.php';

//delete modal
include_once 'delete_category_modal.php';


$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  

$query = "SELECT * FROM jj_inv_categories ORDER BY cid ASC LIMIT $start_from, $limit";
$result = mysqli_query($conn, $query);

?>

<!-- Display table  with pagination -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
 			<table class="table table-bordered table-container">
 				<thead>
 					<tr>
 						<th scope="col">#</th>
 						<th scope="col">Category</th>
 						<th scope="col">Status</th>
 						<th scope="col" colspan="2">Action</th>
 					</tr>
 				</thead>
 				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
 				<tbody>
 					<tr>
 						<th scope="row"><?php echo $row['cid']; ?></th>
 						<td><?php echo $row['category_name']; ?></td>
 						<td><a href="#" class="btn btn-success btn-sm">Active</a></td>
 						<td>
 							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update-category" data-cid="<?php echo $row['cid']; ?>" data-category_name="<?php echo $row['category_name']; ?>"><span class="fa fa-edit"></span> Edit</button><br>
 						</td>
 						<td>
 							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-category" data-c_id="<?php echo $row['cid']; ?>" >
 							<span class="fa fa-trash"></span> Delete</button>
 						</td>
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
include_once 'category_pagination.php';
 ?>



