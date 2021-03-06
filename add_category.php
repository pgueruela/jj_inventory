<!-- Modal for adding category -->

<div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<div class="container">
       		<form method="post">
       			<div class="row">
       				<div class="col-md-12">
       					<input type="text" name="add_category" class="form-control" placeholder="Enter category" required/>
       				</div>
       			</div>
       			<!-- Submit button -->
       			<div class="row">
       				<div class="col-md-12">
       					<button type="submit" class="btn btn-primary modal-submit-btn" name="add-category">Add</button>
       				</div>
       			</div>
       		</form>
       	</div>		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php 
//Process for adding category

include_once 'process/add_category_process.php';
 ?>