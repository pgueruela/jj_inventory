<?php 
include_once 'includes/header.php';
 ?>

 <!-- Login form -->
  <div class="container form-container">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-body">
                <div class="row">
                    <img class="card-img-top mx-auto" style="width:50%; height:30%;" src="images/login-logo.png" alt="Login Icon">
                	<div class="col-md-12">
                		<h2 style="text-align: center">Login</h2>
                        <hr>
                	</div>
                </div>
                   
                <form method="post" action="includes/login_user_process.php">

                    <div class="form-group">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-danger">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-at"></i></div>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-danger">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-key"></i></div>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Submit-button -->
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary submit-btn" name="submit-btn">Login</button> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>