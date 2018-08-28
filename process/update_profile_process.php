   <?php 

      include_once '../includes/dbh.inc.php';

      $profile_id = $_POST['profile_id'];
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $email = $_POST['email'];

      if (isset($_POST['update-profile-submit'])) {

        $sql = "UPDATE jj_inv_account SET fullname = '$fullname', username='$username', email='$email' WHERE id=$profile_id";

        if (mysqli_query($conn, $sql)) {
          header("Location: ../index.php");
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }

      }

      $sql = $conn->query("SELECT * FROM jj_inv_account WHERE id = $profile_id "); 

      $row = mysqli_fetch_assoc($sql);

 ?>