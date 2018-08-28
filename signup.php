<?php 
include 'includes/header.php';
include 'includes/dbh.inc.php';
include 'includes/signup_user_process.php';
include 'admin_navigation_bar.php';

?>


    <!-- Signup form -->
    <div class="container form-container-signup">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-body">
                <div class="row">
                    <img class="card-img-top mx-auto" style="width:60%; height: 150px;" src="images/login-logo.png" alt="Login Icon">
                    <div class="col-md-12">
                        <h3 style="text-align: center;">Signup</h3>
                        <hr>
                    </div>
                </div>
                <form method="post">
                        <!-- fullname -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-user-circle"></i></div>
                                        <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" >  
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- usertype -->
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                          <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-users"></i></div>
                                          <select name="usertype" class="form-control" id="usertype"
                                          >
                                              <option value="<?php echo $usertype ?>">Choose User Type</option>
                                              <option value="Admin">Admin</option>
                                              <option value="Other">Other</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>

                        <!-- username -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-user-circle"></i></div>
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-at"></i></div>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- password -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-key"></i></div>
                                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!-- Register-button -->
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary submit-btn" name="submit-btn">Register</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>



                

  