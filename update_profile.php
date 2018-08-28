<?php 
include_once 'includes/header.php';
 ?>
 <div class="modal fade" id="update-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <div class="container">
                      <form method="post" action="process/update_profile_process.php">
                        <input type="hidden" id="id" name="profile_id">
                        <div class="row">
                          <div class="col-md-12">
                            <label>Fullname</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter your fullname"> 
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <label>Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter your fullname"> 
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your fullname"> 
                          </div>
                        </div>

                        <!-- Submit button -->
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary modal-submit-btn" name="update-profile-submit">Update</button>
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
        $('#update-profile').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id = button.data('id');
          var fullname = button.data('fullname');
          var username = button.data('username');
          var email = button.data('email');
          var modal = $(this)
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #fullname').val(fullname);
          modal.find('.modal-body #username').val(username);
          modal.find('.modal-body #email').val(email);
        });
    </script>