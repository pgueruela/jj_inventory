<?php 

session_start();

	if (isset($_POST['submit-btn'])) {
		
		include 'dbh.inc.php';

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']); 

		//Error Handlers
		//Check inputs if empty
		if (empty($email) || empty($password)) {
			header("Location: ../login.php?login=empty");
			exit();

		}else {

			//Check if there is email that has been registered
			$sql = "SELECT * FROM jj_inv_user WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
				header("Location: ../login.php?login=emailnotfound");
				exit();
			}else {
				if ($row = mysqli_fetch_assoc($result)) {
					$hashPassword = password_verify($password, $row['password']);
					if ($hashPassword == false) {
						header("Location: ../login.php?login=passwordincorrect");
						exit();
					}elseif($hashPassword == true){

						//Login the user; get the information of user from database and stored into session
						$_SESSION['user_id'] = $row['id'];
						$_SESSION['user_fullname'] = $row['fullname'];
						$_SESSION['user_type'] = $row['user_type'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['user_email'] = $row['email'];
						header("Location: ../index.php");
						exit();
					}
				}
			}
		}
	}
 ?>