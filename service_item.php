<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$service_read_query = "SELECT * FROM services";
$services = mysqli_query($db_connect, $service_read_query);
?>
<div class="row">
  <div class="col-lg-8 text-center">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Service Icon</th>
          <th>Service Title</th>
          <th>Service Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
        $serial = 1;
       foreach ($services as $service): ?>
      <tbody>
        <tr>
          <td><?=$serial++?></td>
          <td><?=$service['service_icon']?></td>
          <td><?=$service['service_title']?></td>
          <td><?=$service['service_description']?></td>
          <td>
            <a type="button" href="service_edit.php?service_id=<?=$service['id']?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>
    <div class="col-lg-4">
      <form method="post" action="service_item_post.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Service Icon</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Service Icon" name="service_icon">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Service Title" name="service_title">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service Description</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Service Description" name="service_description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
