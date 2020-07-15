<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$testimonial_head_read_query = "SELECT * FROM testimonial_headings";
$testimonial_headings = mysqli_query($db_connect, $testimonial_head_read_query);
?>
<div class="row">
  <div class="col-lg-12 text-center">
    <?php foreach ($testimonial_headings as $testimonial_heading): ?>
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Subheading</th>
          <th>Testimonial Heading</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?=$testimonial_heading['testimonial_subheading']?></td>
          <td><?=$testimonial_heading['testimonial_heading']?></td>
          <td>
            <a type="button" href="testimonial_head_edit.php?testimonial_head_id=<?=$testimonial_heading['id']?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      </tbody>
    </table>

  <?php endforeach; ?>
  </div>
  <!-- <div class="col-lg-4">
    <form method="post" action="testimonial_head_post.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Testimonial Subheading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Testimonial Subheading" name="testimonial_subheading">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Testimonial Heading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Testimonial Heading" name="testimonial_heading">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div> -->

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
