<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$nav_logo_read_query = "SELECT * FROM logos";
$nav_logos = mysqli_query($db_connect, $nav_logo_read_query);
?>
<div class="row">
  <div class="col-lg-12">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Site Name</th>
          <th>Logo</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php foreach ($nav_logos as $nav_logo): ?>

      <tbody>
        <tr>
          <td>1</td>
          <td><?=$nav_logo['site_name']?></td>
          <td>
            <img src="/kufa/uploads/logo/<?=$nav_logo['logo']?>" alt="<?=$nav_logo['logo']?>">
          </td>
          <td>
            <a type="button" href="nav_logo_update.php?nav_logo_id=<?=$nav_logo['id']?>" class="btn btn-info btn-sm">Update</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>

  </div>
  <!-- <div class="col-lg-4">
    <form method="post" action="navbar_post.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Site Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Site Name" name="site_name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Logo</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="logo">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div> -->

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
