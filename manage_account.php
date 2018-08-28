<?php 
include 'includes/dbh.inc.php';
include_once 'includes/header.php';
include_once 'admin_navigation_bar.php';
 ?>

<!-- Display table -->
<?php 

/*$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  */

$id = $_SESSION["user_id"];

$query = "SELECT * FROM jj_inv_account WHERE id!= $id";
$result = mysqli_query($conn, $query); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
 			<table class="table table-bordered table-container">
 				<thead>
 					<tr>
 						<th scope="col">#</th>
 						<th scope="col">Fullname</th>
 						<th scope="col">Usertype</th>
 						<th scope="col">Username</th>
 						<th scope="col">Email</th>
 						<th scope="col">Action</th>
 					</tr>
 				</thead>
 				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
 				<tbody>
		          <tr>
		            <th scope="row"><?php echo $row['id']; ?></th>
		            <td><?php echo $row['fullname']; ?></td>
		            <td><?php echo $row['user_type']; ?></td>
		            <td><?php echo $row['username']; ?></td>
		            <td><?php echo $row['email']; ?></td>
		            <td>
		              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-account" data-id="<?php echo $row['id']; ?>">
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
include_once 'delete_account_modal.php';
 ?>



