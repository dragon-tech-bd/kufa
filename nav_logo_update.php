<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$nav_logo_id = $_GET['nav_logo_id'];

$nav_logo_get_query = "SELECT * FROM logos WHERE id = $nav_logo_id";

$nav_logo_from_db = mysqli_query($db_connect, $nav_logo_get_query);
$after_assoc = mysqli_fetch_assoc($nav_logo_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="navbar.php">Home</a></li>
      </ol>
    </nav>

      <form method="post" action="nav_logo_update_post.php" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="nav_logo_id" value="<?=$nav_logo_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Old Logo</label>
          <br>
          <img src="/kufa/uploads/logo/<?=$after_assoc['logo']?>" alt="<?=$after_assoc['logo']?>">
          <br>
          <br>
          <label for="exampleInputEmail1">Logo</label>
          <input type="file" class="form-control" name="logo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
