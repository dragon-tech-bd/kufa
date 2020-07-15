<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$client_review_id = $_GET['client_review_id'];

$client_review_get_query = "SELECT * FROM client_reviews WHERE id = $client_review_id";

$client_review_from_db = mysqli_query($db_connect, $client_review_get_query);
$after_assoc = mysqli_fetch_assoc($client_review_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="testimonial_review.php">Home</a></li>
        <li class="breadcrumb-item"><?=$after_assoc['client_name']?></li>
      </ol>
    </nav>
      <form method="post" action="client_review_update_post.php" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="client_review_id" value="<?=$client_review_id?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Client Review</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_review" value="<?=$after_assoc['client_review']?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Client Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_name" value="<?=$after_assoc['client_name']?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Client Designation</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_designation" value="<?=$after_assoc['client_designation']?>">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Old Image</label>
          <br>
          <img class="img-fluid" src="/kufa/uploads/testimonial/<?=$after_assoc['client_image']?>" alt="<?=$after_assoc['client_image']?>">
          <br>
          <br>
          <label for="exampleInputEmail1">New Image</label>
          <input type="file" class="form-control" name="client_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
