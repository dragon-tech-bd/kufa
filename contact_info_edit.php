<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';
$contact_id = $_GET['contact_id'];

$contact_get_query = "SELECT * FROM contact_infos WHERE id = $contact_id";

$from_db = mysqli_query($db_connect, $contact_get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
?>
<div class="row">
  <div class="col-lg-8 m-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="contact_info.php">Home</a></li>
      </ol>
    </nav>

    <form method="post" action="contact_info_edit_post.php">
      <input type="hidden" class="form-control" name="contact_id" value="<?=$contact_id?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Contact Head sm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="contact_head_sm" value="<?=$after_assoc['contact_head_sm']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contact Main Head</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="contact_main_head" value="<?=$after_assoc['contact_main_head']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contact Info Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="contact_info_description" value="<?=$after_assoc['contact_info_description']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Office</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="office" value="<?=$after_assoc['office']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="address" value="<?=$after_assoc['address']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" value="<?=$after_assoc['phone']?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="<?=$after_assoc['email']?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>


<?php
require_once 'includes/deshbord/footer.php';
?>
