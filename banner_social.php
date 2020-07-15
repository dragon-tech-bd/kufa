<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$social_read_query = "SELECT * FROM banner_icons";
$links = mysqli_query($db_connect, $social_read_query);
?>
<div class="row">
    <div class="col-lg-8 text-center">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Social Icon</th>
            <th>Social Link</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
          $serial = 1;
         foreach ($links as $link): ?>
        <tbody>
          <tr>
            <td><?=$serial++?></td>
            <td><?=$link['social_icon']?></td>
            <td><?=$link['social_link']?></td>
            <td>
              <a type="button" href="social_edit.php?social_id=<?=$link['id']?>" class="btn btn-info btn-sm">Edit</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
      </table>

  </div>
    <div class="col-lg-4">
    <h1>Banner Social Link</h1>
    <form method="post" action="banner_social_post.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Social Icon</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Social Icon" name="social_icon">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Social Link</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Social Link" name="social_link">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>

  </div>
</div>

<?php
require_once 'includes/deshbord/footer.php';
?>
