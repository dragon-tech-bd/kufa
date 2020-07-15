<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$service_read_query = "SELECT * FROM service_headings";
$service_headings = mysqli_query($db_connect, $service_read_query);
?>
<div class="row">
  <?php foreach ($service_headings as $service_heading): ?>
  <div class="col-lg-12 text-center">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Small Heading</th>
          <th>Main Heading</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?=$service_heading['service_head_one']?></td>
          <td><?=$service_heading['service_head_two']?></td>
          <td>
            <a type="button" href="service_head_edit.php?service_head_id=<?=$service_heading['id']?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
  <?php endforeach; ?>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
