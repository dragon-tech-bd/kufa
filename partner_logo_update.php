<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$partner_logo_id = $_GET['partner_logo_id'];

$partner_logo_get_query = "SELECT * FROM partners WHERE id = $partner_logo_id";

$partner_logo_from_db = mysqli_query($db_connect, $partner_logo_get_query);
$after_assoc = mysqli_fetch_assoc($partner_logo_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="partner.php">Home</a></li>
      </ol>
    </nav>

      <form method="post" action="partner_logo_update_post.php" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="partner_logo_id" value="<?=$partner_logo_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Old Logo</label>
          <br>
          <img src="/kufa/uploads/partner/<?=$after_assoc['partners']?>" alt="<?=$after_assoc['partners']?>">
          <br>
          <br>
          <label for="exampleInputEmail1">Partners Logo</label>
          <input type="file" class="form-control" name="partners">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
