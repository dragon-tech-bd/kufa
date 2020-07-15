<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$about_image_id = $_GET['about_image_id'];

$about_image_get_query = "SELECT * FROM about_images WHERE id = $about_image_id";

$about_image_from_db = mysqli_query($db_connect, $about_image_get_query);
$after_assoc = mysqli_fetch_assoc($about_image_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="about_image.php">Home</a></li>
      </ol>
    </nav>
      <form method="post" action="about_image_update_post.php" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="about_image_id" value="<?=$about_image_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Old Image</label>
          <br>
          <img class="img-fluid" src="/kufa/uploads/about/<?=$after_assoc['image']?>" alt="<?=$after_assoc['your_img']?>">
          <br>
          <br>
          <label for="exampleInputEmail1">New Image</label>
          <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
