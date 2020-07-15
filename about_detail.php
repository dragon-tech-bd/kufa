<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$about_detail_read_query = "SELECT * FROM about_details";
$about_details = mysqli_query($db_connect, $about_detail_read_query);

?>
<div class="row">
  <div class="col-lg-12 text-center">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>About SubHeading</th>
          <th>About Heading</th>
          <th>About Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
        $serial = 1;
       foreach ($about_details as $about_detail): ?>
      <tbody>
        <tr>
          <td><?=$serial++?></td>
          <td><?=$about_detail['about_subhead']?></td>
          <td><?=$about_detail['about_head']?></td>
          <td><?=$about_detail['about_description']?></td>
          <td>
            <a type="button" href="about_update.php?about_detail_id=<?=$about_detail['id']?>" class="btn btn-info btn-sm">Update</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>

  </div>
  <!-- <div class="col-lg-4">
    <form method="post" action="about_detail_post.php">
      <div class="form-group">
        <label for="exampleInputEmail1">About Subheading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="About Subheading" name="about_subhead">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">About Heading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="About Heading" name="about_head">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">About Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="About Description" name="about_description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div> -->

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
