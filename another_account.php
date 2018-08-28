<?php 

$fullnameErr = $usertypeErr = $usernameErr = $emailErr = $password = "";
$fullname = $usertype = $username = $email = $password = "";

if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {

    include_once 'includes/dbh.inc.php';

    // $fullname = mysqli_real_escape_string($conn, $_POST['fullname']); 
    // $user_type = mysqli_real_escape_string($conn, $_POST['usertype']);
    // $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $user_pwd = mysqli_real_escape_string($conn, $_POST['password']); 
        
    //Error Handlers
    //Check for empty fields
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Fullname is required";
        
    }else{
        test_input($fullname);
        //Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
            $fullnameErr = "Only letters and white space allowed";
        }

    }

    if (empty($_POST["usertype"])) {
      $usertypeErr = "Usertype is required!";
    }else {
      test_input($usertype);
    }
                       
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required!";
    } else {
        test_input($username);
        //Check if username is taken
        $sql = "SELECT * FROM jj_inv_account WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
                                    
        if ($resultCheck > 0) {
            $usernameErr = "Username is already taken!";
        }    
    }
                        
    if (empty($_POST["email"])) {
        $emailErr = "Email is required!";
    }else{
        test_input("email");
        //Email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email is invalid!";
        }
    }
                                
    if (empty($_POST["password"])) {
        $password = "Password is required bitch!";
    }else{
        test_input($password);
        //Hashing the password
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
                                    //Insert data into database
        $sql = "INSERT INTO jj_inv_account (fullname, user_type, username, email, password) VALUES('$fullname', '$user_type', '$username', '$email', '$hashPass');";
        mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "Created succesfully!";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }                             
    }   
 }

 function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 
 ?>


<!-- Modal for adding category -->

<div class="modal fade" id="another_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<div class="container">
       		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             <!-- fullname -->
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <div class="input-group-addon" style="width: 2.4rem"><i class="fas fa-user-circle"></i></div>
                              <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" value="<?php echo $fullname; ?>">
                              <span class="error"><?php echo $fullnameErr; ?></span>
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
                              <span class="error"><?php echo $usertypeErr; ?></span>
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
                              <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                              <span class="error"><?php echo $usernameErr; ?></span>
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
                              <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $email; ?>">
                              <span class="error"><?php echo $emailErr; ?></span>
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
                              <input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $password; ?>">
                              <span class="error"><?php echo $password; ?></span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Register-button -->
              <div class="row">
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-primary submit-btn" name="submit">Register</button>
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