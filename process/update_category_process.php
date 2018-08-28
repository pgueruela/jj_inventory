   <?php 

      include_once '../includes/dbh.inc.php';

      $category_id = $_POST['category-id'];
      $category_name = $_POST['update-category'];

      if (isset($_POST['submit-update-category'])) {

        $sql = "UPDATE jj_inv_categories SET category_name = '$category_name' WHERE cid=$category_id";

        if (mysqli_query($conn, $sql)) {
          header("Location: ../manage_categories.php");
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }

      }

 ?>