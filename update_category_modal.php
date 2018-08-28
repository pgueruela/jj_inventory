 <div class="modal fade" id="update-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <div class="container">
                      <form method="post" action="process/update_category_process.php">
                        <input type="hidden" id="cid" name="category-id">
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" id="category_name" name="update-category" class="form-control" placeholder="Enter category"> 
                          </div>
                        </div>

                         <!-- Submit button -->
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary modal-submit-btn" name="submit-update-category">Update</button>
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
        $('#update-category').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var cid = button.data('cid');
          var category_name = button.data('category_name');
          var modal = $(this)
          modal.find('.modal-body #cid').val(cid);
          modal.find('.modal-body #category_name').val(category_name);
        });
      </script>

   



