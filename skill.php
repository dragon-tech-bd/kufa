<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$skill_read_query = "SELECT * FROM skills";
$skills = mysqli_query($db_connect, $skill_read_query);

?>
<div class="row">
  <div class="col-lg-8 text-center">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Skill Year</th>
          <th>Skill Title</th>
          <th>Skill "%"</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
        $serial = 1;
       foreach ($skills as $skill): ?>
      <tbody>
        <tr>
          <td><?=$serial++?></td>
          <td><?=$skill['skill_year']?></td>
          <td><?=$skill['skill_title']?></td>
          <td><?=$skill['skill_parcent']?></td>
          <td>
            <a type="button" href="skill_edit.php?skill_id=<?=$skill['id']?>" class="btn btn-info btn-sm">Edite</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>

  </div>
  <div class="col-lg-4">
    <form method="post" action="skill_post.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Skill Year</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skill Year" name="skill_year">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Skill Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skill Title" name="skill_title">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Skill "%"</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skill "%"" name="skill_parcent">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
