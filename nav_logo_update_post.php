<?php
require_once 'includes/db.php';
$nav_logo_id = $_POST['nav_logo_id'];
$site_name = $_POST['site_name'];
if ($_FILES['logo']['name']) {
  $logo_from_db = "SELECT logo FROM logos WHERE id = $nav_logo_id";
  $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $logo_from_db))['logo'];
  $old_photo_location = 'uploads/logo/'.$old_photo_name;
  unlink($old_photo_location);


  $file_name = $_FILES['logo']['name'];
  $after_explode = explode(".", $file_name);
  $new_file_extention = end($after_explode);
  $new_file_name = $nav_logo_id.".".$new_file_extention;
  $new_file_location = "uploads/logo/".$new_file_name;
  move_uploaded_file($_FILES['logo']['tmp_name'], $new_file_location);


  $new_logo_update_query = "UPDATE logos SET logo = '$new_file_name' WHERE id = $nav_logo_id";
  mysqli_query($db_connect, $new_logo_update_query);
  header('location: navbar.php');

}









?>
