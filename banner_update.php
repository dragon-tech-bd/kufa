<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$banner_id = $_GET['banner_id'];

$banner_get_query = "SELECT * FROM banners WHERE id = $banner_id";

$banner_from_db = mysqli_query($db_connect, $banner_get_query);
$after_assoc = mysqli_fetch_assoc($banner_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="banner_detail.php">Home</a></li>
      </ol>
    </nav>
      <form method="post" action="banner_update_post.php" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="banner_id" value="<?=$banner_id?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Your Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="your_name" value="<?=$after_assoc['your_name']?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Your Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="your_desc" value="<?=$after_assoc['your_desc']?>">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Old Image</label>
          <br>
          <img class="img-fluid" src="/kufa/uploads/banner/<?=$after_assoc['your_img']?>" alt="<?=$after_assoc['your_img']?>">
          <br>
          <br>
          <label for="exampleInputEmail1">New Image</label>
          <input type="file" class="form-control" name="your_img">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
