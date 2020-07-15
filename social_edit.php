<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$social_id = $_GET['social_id'];

$get_query = "SELECT * FROM banner_icons WHERE id = $social_id";

$from_db = mysqli_query($db_connect, $get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="banner_social.php">Home</a></li>
      </ol>
    </nav>

      <form method="post" action="social_edit_post.php">
        <input type="hidden" class="form-control" name="social_id" value="<?=$social_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Social Icon</label>
          <input type="text" class="form-control" name="social_icon" value="<?=$after_assoc['social_icon']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Social Link</label>
          <input type="text" class="form-control" name="social_link" value="<?=$after_assoc['social_link']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
