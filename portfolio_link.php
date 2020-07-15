<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$portfolio_link_read_query = "SELECT * FROM portfolio_links";
$links = mysqli_query($db_connect, $portfolio_link_read_query);
?>
<div class="row">
    <div class="col-lg-12 text-center">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Serial</th>
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
            <td><?=$link['portfolio_link']?></td>
            <td>
              <a type="button" href="portfolio_link_edit.php?portfolio_link_id=<?=$link['id']?>" class="btn btn-info btn-sm">Edit</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
      </table>

  </div>
    <!-- <div class="col-lg-4">
    <h1>Portfolio Link</h1>
    <form method="post" action="portfolio_link_post.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Portfolio Link</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="portfolio Link" name="portfolio_link">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div> -->

  </div>
</div>

<?php
require_once 'includes/deshbord/footer.php';
?>
