<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$partner_logo_read_query = "SELECT * FROM partners";
$partner_logos = mysqli_query($db_connect, $partner_logo_read_query);
?>
<div class="row">
  <div class="col-lg-8">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Site Name</th>
            <th>Logo</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php foreach ($partner_logos as $partner_logo): ?>

        <tbody>
          <tr>
            <td>1</td>
            <td><?=$partner_logo['site_name']?></td>
            <td>
              <img src="/kufa/uploads/partner/<?=$partner_logo['partners']?>" alt="<?=$partner_logo['partners']?>">
            </td>
            <td>
              <a type="button" href="partner_logo_update.php?partner_logo_id=<?=$partner_logo['id']?>" class="btn btn-info btn-sm">Update</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
      </table>

  </div>
  <div class="col-lg-4">
    <form method="post" action="partners_post.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Site Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Site Name" name="site_name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Partners</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="partners">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
