<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$testimonial_head_id = $_GET['testimonial_head_id'];

$testimonial_head_get_query = "SELECT * FROM testimonial_headings WHERE id = $testimonial_head_id";

$testimonial_head_from_db = mysqli_query($db_connect, $testimonial_head_get_query);
$testimonial_head_after_assoc = mysqli_fetch_assoc($testimonial_head_from_db);
?>
<div class="col-lg-6 m-auto">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="testimonial_head.php">Home</a></li>
    </ol>
  </nav>

    <form method="post" action="testimonial_head_edit_post.php">
      <input type="hidden" class="form-control" name="testimonial_head_id" value="<?=$testimonial_head_id?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Testimonial Subheading</label>
        <input type="text" class="form-control" name="testimonial_subheading" value="<?=$testimonial_head_after_assoc['testimonial_subheading']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Testimonial Heading</label>
        <input type="text" class="form-control" name="testimonial_heading" value="<?=$testimonial_head_after_assoc['testimonial_heading']?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
