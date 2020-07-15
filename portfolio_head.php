<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$portfolio_head_read_query = "SELECT * FROM portfolio_headings";
$portfolio_headings = mysqli_query($db_connect, $portfolio_head_read_query);
?>
<div class="row">
  <div class="col-lg-12 text-center">
    <?php foreach ($portfolio_headings as $portfolio_heading): ?>
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Subheading</th>
          <th>Portfolio Heading</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?=$portfolio_heading['portfolio_subheading']?></td>
          <td><?=$portfolio_heading['portfolio_heading']?></td>
          <td>
            <a type="button" href="portfolio_head_edit.php?portfolio_head_id=<?=$portfolio_heading['id']?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      </tbody>
    </table>

  <?php endforeach; ?>
  </div>
  <!-- <div class="col-lg-4">
    <form method="post" action="portfolio_head_post.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Subheading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Portfolio Subheading" name="portfolio_subheading">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Heading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Portfolio Heading" name="portfolio_heading">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div> -->

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
