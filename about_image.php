<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$about_image_read_query = "SELECT * FROM about_images";
$about_images = mysqli_query($db_connect, $about_image_read_query);
?>
<div class="row">
    <div class="col-lg-12">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Site Name</th>
            <th>Your Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php foreach ($about_images as $about_image): ?>

        <tbody>
          <tr>
            <td>1</td>
            <td><?=$about_image['site_name']?></td>
            <td>
              <img src="uploads/about/<?=$about_image['image']?>" alt="<?=$about_image['image']?>">
            </td>
            <td>
              <a type="button" href="about_image_update.php?about_image_id=<?=$about_image['id']?>" class="btn btn-info btn-sm">Update</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
      </table>

  </div>
  <!-- <div class="col-lg-4">
    <form method="post" action="about_img_post.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Site Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Site Name" name="site_name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div> -->

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
