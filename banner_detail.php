<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$banner_read_query = "SELECT * FROM banners";
$banners = mysqli_query($db_connect, $banner_read_query);
?>
<div class="row">
    <div class="col-lg-12">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Your Name</th>
            <th>Your Description</th>
            <th>Your Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php foreach ($banners as $banner): ?>

        <tbody>
          <tr>
            <td>1</td>
            <td><?=$banner['your_name']?></td>
            <td><?=$banner['your_desc']?></td>
            <td>
              <img src="uploads/banner/<?=$banner['your_img']?>" alt="<?=$banner['your_img']?>">
            </td>
            <td>
              <a type="button" href="banner_update.php?banner_id=<?=$banner['id']?>" class="btn btn-info btn-sm">Update</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
      </table>

  </div>
  <!-- <div class="col-lg-4">
    <h1>Banner Detail Page</h1>
    <form method="post" action="banner_post.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Your Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" name="your_name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Description" name="your_desc">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Your Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="your_img">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div> -->

<?php
require_once 'includes/deshbord/footer.php';
?>
