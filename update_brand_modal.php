 <div class="modal fade" id="update-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <div class="container">
                      <form method="post" action="process/update_brand_process.php">
                        <input type="hidden" id="bid" name="brand-id">
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" id="brand_name" name="update-brand" class="form-control" placeholder="Enter your fullname"> 
                          </div>
                        </div>
                         <!-- Submit button -->
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary modal-submit-btn" name="submit-update-brand">Update</button>
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
        $('#update-brand').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var bid = button.data('bid');
          var brand_name = button.data('brand_name');
          var modal = $(this)
          modal.find('.modal-body #bid').val(bid);
          modal.find('.modal-body #brand_name').val(brand_name);
        });

      //Get data for update category      
    </script>



