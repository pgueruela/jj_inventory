<?php 

    if (isset($_POST['submit-btn'])) {

        include_once 'dbh.inc.php';

        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']); 
        $user_type = mysqli_real_escape_string($conn, $_POST['usertype']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $user_pwd = mysqli_real_escape_string($conn, $_POST['password']); 
        
        //Error Handlers
        //Check for empty fields
        if (empty($fullname) || empty($user_type) || empty($username) || empty($email) || empty($user_pwd)) {
            header("Location: ../signup.php?signup=empty");
            exit();
        
        }else{
            //Check if input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
                    header("Location: ../signup.php?signup=invalidcharacter");
                    exit();

            }else{

                //Check if username is taken
                $sql = "SELECT * FROM jj_inv_account WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                            
                if ($resultCheck > 0) {
                header("Location: ../signup.php?signup=usertypetaken");
                exit();

                }else{

                    //Email validation
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../signup.php?signup=invalidemail");
                    exit();

                    }else{


                        //Hashing the password
                        $hashPass = password_hash($user_pwd, PASSWORD_DEFAULT);
                        //Insert data into database
                        $sql = "INSERT INTO jj_inv_account (fullname, user_type, username, email, password) VALUES('$fullname', '$user_type', '$username', '$email', '$hashPass');";
                        mysqli_query($conn, $sql);

                        if ($conn->query($sql) === TRUE) {
                            header("Location: ../signup.php?signup=success");
                            exit();

                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                                
                        }   
                    }
                }           
            }      
        }

 ?>

