<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$counter_id = $_GET['counter_id'];

$counter_get_query = "SELECT * FROM counters WHERE id = $counter_id";

$from_db = mysqli_query($db_connect, $counter_get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="counter.php">Home</a></li>
        <li class="breadcrumb-item"><?=$after_assoc['counter_title']?></li>
      </ol>
    </nav>

      <form method="post" action="counter_edit_post.php">
        <input type="hidden" class="form-control" name="counter_id" value="<?=$counter_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Counter Icon</label>
          <input type="text" class="form-control" name="counter_icon" value="<?=$after_assoc['counter_icon']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Counter Number</label>
          <input type="text" class="form-control" name="counter_number" value="<?=$after_assoc['counter_number']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Counter Title</label>
          <input type="text" class="form-control" name="counter_title" value="<?=$after_assoc['counter_title']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
