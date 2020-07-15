<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$portfolio_head_id = $_GET['portfolio_head_id'];

$portfolio_head_get_query = "SELECT * FROM portfolio_headings WHERE id = $portfolio_head_id";

$portfolio_head_from_db = mysqli_query($db_connect, $portfolio_head_get_query);
$portfolio_head_after_assoc = mysqli_fetch_assoc($portfolio_head_from_db);
?>
<div class="col-lg-6 m-auto">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="portfolio_head.php">Home</a></li>
    </ol>
  </nav>

    <form method="post" action="portfolio_head_edit_post.php">
      <input type="hidden" class="form-control" name="portfolio_head_id" value="<?=$portfolio_head_id?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Subheading</label>
        <input type="text" class="form-control" name="portfolio_subheading" value="<?=$portfolio_head_after_assoc['portfolio_subheading']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Heading</label>
        <input type="text" class="form-control" name="portfolio_heading" value="<?=$portfolio_head_after_assoc['portfolio_heading']?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
