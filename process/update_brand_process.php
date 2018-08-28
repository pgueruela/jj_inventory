   <?php 

      include_once '../includes/dbh.inc.php';

      $brand_id = $_POST['brand-id'];
      $brand_name = $_POST['update-brand'];

      if (isset($_POST['submit-update-brand'])) {

        $sql = "UPDATE jj_inv_brands SET brand_name = '$brand_name' WHERE bid=$brand_id";

        if (mysqli_query($conn, $sql)) {
          header("Location: ../manage_brand.php");
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }

      }

 ?>