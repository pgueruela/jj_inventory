 <?php 

    include_once '../includes/dbh.inc.php';

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $remarks = $_POST['remarks'];

    if (isset($_POST['submit-product-update'])) {

      $sql = "UPDATE jj_inv_products SET product_name = '$product_name', product_price=$product_price, product_stock=$product_quantity, remarks='$remarks' WHERE product_id=$product_id";

        if (mysqli_query($conn, $sql)) {
          header("Location: ../manage_product.php");
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }

      }

 ?>