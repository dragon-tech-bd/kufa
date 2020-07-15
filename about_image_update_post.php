<?php
require_once 'includes/db.php';
$about_image_id = $_POST['about_image_id'];
if ($_FILES['image']['name']) {
  $about_image_from_db = "SELECT image FROM about_images WHERE id = $about_image_id";
  $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $about_image_from_db))['image'];
  $old_photo_location = 'uploads/about/'.$old_photo_name;
  unlink($old_photo_location);


  $file_name = $_FILES['image']['name'];
  $after_explode = explode(".", $file_name);
  $new_file_extention = end($after_explode);
  $new_file_name = $banner_id.".".$new_file_extention;
  $new_file_location = "uploads/about/".$new_file_name;
  move_uploaded_file($_FILES['image']['tmp_name'], $new_file_location);


  $new_about_image_update_query = "UPDATE about_images SET image = '$new_file_name' WHERE id = $about_image_id";
  mysqli_query($db_connect, $new_about_image_update_query);
  header('location: about_image.php');

}








?>
