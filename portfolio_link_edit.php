<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$portfolio_link_id = $_GET['portfolio_link_id'];

$portfolio_link_get_query = "SELECT * FROM portfolio_links WHERE id = $portfolio_link_id";

$portfolio_link_from_db = mysqli_query($db_connect, $portfolio_link_get_query);
$after_assoc = mysqli_fetch_assoc($portfolio_link_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="portfolio_link.php">Home</a></li>
      </ol>
    </nav>

      <form method="post" action="portfolio_link_edit_post.php">
        <input type="hidden" class="form-control" name="portfolio_link_id" value="<?=$portfolio_link_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Social Icon</label>
          <input type="text" class="form-control" name="portfolio_link" value="<?=$after_assoc['portfolio_link']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
