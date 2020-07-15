<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$portfolio_item_id = $_GET['portfolio_item_id'];

$portfolio_item_get_query = "SELECT * FROM portfolio_items WHERE id = $portfolio_item_id";

$portfolio_item_from_db = mysqli_query($db_connect, $portfolio_item_get_query);
$after_assoc = mysqli_fetch_assoc($portfolio_item_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="portfolio_item.php">Home</a></li>
        <li class="breadcrumb-item"><?=$after_assoc['portfolio_title']?></li>
      </ol>
    </nav>
      <form method="post" action="portfolio_item_update_post.php" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="portfolio_item_id" value="<?=$portfolio_item_id?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Portfolio Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="portfolio_title" value="<?=$after_assoc['portfolio_title']?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Portfolio Heading</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="portfolio_head" value="<?=$after_assoc['portfolio_head']?>">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Old Image</label>
          <br>
          <img class="img-fluid" src="/kufa/uploads/portfolio/<?=$after_assoc['portfolio_image']?>" alt="<?=$after_assoc['portfolio_image']?>">
          <br>
          <br>
          <label for="exampleInputEmail1">New Image</label>
          <input type="file" class="form-control" name="portfolio_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
