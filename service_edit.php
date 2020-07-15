<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$service_id = $_GET['service_id'];

$get_query = "SELECT * FROM services WHERE id = $service_id";

$from_db = mysqli_query($db_connect, $get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="service_body.php">Home</a></li>
        <li class="breadcrumb-item"><?=$after_assoc['service_title']?></li>
      </ol>
    </nav>

      <form method="post" action="service_edit_post.php">
        <input type="hidden" class="form-control" name="service_id" value="<?=$service_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Service Icon</label>
          <input type="text" class="form-control" name="service_icon" value="<?=$after_assoc['service_icon']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service Title</label>
          <input type="text" class="form-control" name="service_title" value="<?=$after_assoc['service_title']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service Description</label>
          <input type="text" class="form-control" name="service_description" value="<?=$after_assoc['service_description']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
