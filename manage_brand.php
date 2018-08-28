<?php 

include_once 'includes/header.php';
include_once 'navigation_bar.php';
include_once 'update_brand_modal.php';
include_once 'delete_brand_modal.php';
 ?>

<!-- Display table -->
<?php 

$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  

$query = "SELECT * FROM jj_inv_brands ORDER BY bid ASC LIMIT $start_from, $limit";
$result = mysqli_query($conn, $query); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
 			<table class="table table-bordered table-container">
 				<thead>
 					<tr>
 						<th scope="col">#</th>
 						<th scope="col">Brand</th>
 						<th scope="col">Status</th>
 						<th scope="col" colspan="2">Action</th>
 					</tr>
 				</thead>
 				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
 				<tbody>
		          <tr>
		            <th scope="row"><?php echo $row['bid']; ?></th>
		            <td><?php echo $row['brand_name']; ?></td>
		            <td><a href="#" class="btn btn-success btn-sm"/>Active</a></td>
		            <td>  
		              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update-brand" data-bid="<?php echo $row['bid']; ?>" data-brand_name="<?php echo $row['brand_name']; ?>"><span class="fa fa-edit"></span> Edit</button><br>
		            </td>
		            <td>
		              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-brand" data-b_id="<?php echo $row['bid']; ?>" >
		              <span class="fa fa-trash"></span> Delete</button><br>
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
include_once 'brand_pagination.php';
 ?>

