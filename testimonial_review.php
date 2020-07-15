<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$client_review_read_query = "SELECT * FROM client_reviews";
$client_reviews = mysqli_query($db_connect, $client_review_read_query);
?>
<div class="row">
  <div class="col-lg-8">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Client Reviews</th>
          <th>Client Name</th>
          <th>Client Designation</th>
          <th>Client Designation</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php foreach ($client_reviews as $client_review): ?>

      <tbody>
        <tr>
          <td>1</td>
          <td><?=$client_review['client_review']?></td>
          <td><?=$client_review['client_name']?></td>
          <td><?=$client_review['client_designation']?></td>
          <td>
            <img src="uploads/testimonial/<?=$client_review['client_image']?>" alt="<?=$client_review['client_image']?>">
          </td>
          <td>
            <a type="button" href="client_review_update.php?client_review_id=<?=$client_review['id']?>" class="btn btn-info btn-sm">Update</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>

  </div>
  <div class="col-lg-4">
    <form method="post" action="testimonial_review_post.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Client Review</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Client Review" name="client_review">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Client Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Client Name" name="client_name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Client Designation</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Client Designation" name="client_designation">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Client Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_image">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  </div>



<?php
require_once 'includes/deshbord/footer.php';
?>
