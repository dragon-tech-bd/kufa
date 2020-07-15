<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$portfolio_item_read_query = "SELECT * FROM portfolio_items";
$portfolio_items = mysqli_query($db_connect, $portfolio_item_read_query);
?>
<div class="row">
  <div class="col-lg-8">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Portfolio Title</th>
          <th>Portfolio Heading</th>
          <th>Portfolio Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php foreach ($portfolio_items as $portfolio_item): ?>

      <tbody>
        <tr>
          <td>1</td>
          <td><?=$portfolio_item['portfolio_title']?></td>
          <td><?=$portfolio_item['portfolio_head']?></td>
          <td>
            <img src="uploads/portfolio/<?=$portfolio_item['portfolio_image']?>" alt="<?=$portfolio_item['portfolio_image']?>">
          </td>
          <td>
            <a type="button" href="portfolio_item_update.php?portfolio_item_id=<?=$portfolio_item['id']?>" class="btn btn-info btn-sm">Update</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>

  </div>
  <div class="col-lg-4">
    <form method="post" action="portfolio_item_post.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Portfolio Title" name="portfolio_title">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Heading</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Portfolio Heading" name="portfolio_head">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="portfolio_image">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
