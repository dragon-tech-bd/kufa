<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$about_detail_id = $_GET['about_detail_id'];

$about_detail_get_query = "SELECT * FROM about_details WHERE id = $about_detail_id";

$about_detail_from_db = mysqli_query($db_connect, $about_detail_get_query);
$after_assoc = mysqli_fetch_assoc($about_detail_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="about_detail.php">Home</a></li>
      </ol>
    </nav>

      <form method="post" action="about_update_post.php">
        <input type="hidden" class="form-control" name="about_detail_id" value="<?=$about_detail_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">About SubHeading</label>
          <input type="text" class="form-control" name="about_subhead" value="<?=$after_assoc['about_subhead']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">About Heading</label>
          <input type="text" class="form-control" name="about_head" value="<?=$after_assoc['about_head']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">About Description</label>
          <input type="text" class="form-control" name="about_description" value="<?=$after_assoc['about_description']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
