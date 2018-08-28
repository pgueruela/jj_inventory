<!-- navigation bar -->
<?php 

$id = $_SESSION['user_id'];

$result = $conn->query("SELECT * FROM jj_inv_account WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $row['user_type']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.php">Add Account</a>
          <a class="dropdown-item" href="manage_account.php">Manage Account</a>
          <a class="dropdown-item" href="includes/logout.inc.php">Logout</a>
        </div>
      </li>
    </ul> 
  </div>
</nav>

<?php 
include_once 'another_account.php';
 ?>