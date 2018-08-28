 <div class="modal fade" id="delete-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <div class="container">
                      <form method="post" action="process/delete_category_process.php">
                        <input type="hidden" id="c_id" name="c_id">
                        <div class="row">
                        	<div class="col-md-12">
                        		<p>Are you sure you want to delete this category?</p>
                        	</div>
                        </div>

                         <!-- Submit button -->
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-danger" name="submit-delete-category">Delete</button>
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
  
        <script>
	        //Get data for update category  
	        $('#delete-category').on('show.bs.modal', function (event) {
	          var button = $(event.relatedTarget) // Button that triggered the modal
	          var c_id = button.data('c_id');
	          var modal = $(this)
	          modal.find('.modal-body #c_id').val(c_id);
	        });
      	</script>

   




