<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$service_head_id = $_GET['service_head_id'];

$head_get_query = "SELECT * FROM service_headings WHERE id = $service_head_id";

$head_from_db = mysqli_query($db_connect, $head_get_query);
$head_after_assoc = mysqli_fetch_assoc($head_from_db);
?>
<div class="col-lg-6 m-auto">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="service_head.php">Home</a></li>
    </ol>
  </nav>

    <form method="post" action="service_head_edit_post.php">
      <input type="hidden" class="form-control" name="service_head_id" value="<?=$service_head_id?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Service Heading One</label>
        <input type="text" class="form-control" name="service_head_one" value="<?=$head_after_assoc['service_head_one']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Service Heading Two</label>
        <input type="text" class="form-control" name="service_head_two" value="<?=$head_after_assoc['service_head_two']?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
