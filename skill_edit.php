<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$skill_id = $_GET['skill_id'];

$skill_get_query = "SELECT * FROM skills WHERE id = $skill_id";

$skill_from_db = mysqli_query($db_connect, $skill_get_query);
$after_assoc = mysqli_fetch_assoc($skill_from_db);
?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="skill.php">Home</a></li>
        <li class="breadcrumb-item"><?=$after_assoc['skill_title']?></li>
      </ol>
    </nav>

      <form method="post" action="skill_edit_post.php">
        <input type="hidden" class="form-control" name="skill_id" value="<?=$skill_id?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Skill Year</label>
          <input type="text" class="form-control" name="skill_year" value="<?=$after_assoc['skill_year']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service Title</label>
          <input type="text" class="form-control" name="skill_title" value="<?=$after_assoc['skill_title']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Skill "%"</label>
          <input type="text" class="form-control" name="skill_parcent" value="<?=$after_assoc['skill_parcent']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
