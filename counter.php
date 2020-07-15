<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';


$counter_read_query = "SELECT * FROM counters";
$counters = mysqli_query($db_connect, $counter_read_query);
?>
<div class="row">
  <div class="col-lg-8">
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
      foreach ($counters as $counter): ?>
      <tbody>
        <tr>
          <td><?=$serial++?></td>
          <td><?=$counter['counter_icon']?></td>
          <td><?=$counter['counter_number']?></td>
          <td><?=$counter['counter_title']?></td>
          <td>
            <a type="button" href="counter_edit.php?counter_id=<?=$counter['id']?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>

  </div>
  <div class="col-lg-4">
      <form method="post" action="counter_post.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Counter Icon</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Counter Icon" name="counter_icon">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Counter Number</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Counter Number" name="counter_number">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Counter Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Counter Title" name="counter_title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

</div>

<?php
require_once 'includes/deshbord/footer.php';
?>
