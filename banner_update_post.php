<?php
require_once 'includes/db.php';
$banner_id = $_POST['banner_id'];
$your_name = htmlentities($_POST['your_name'], ENT_QUOTES);
$your_desc = htmlentities($_POST['your_desc'], ENT_QUOTES);
if ($_FILES['your_img']['name']) {
  $banner_img_from_db = "SELECT your_img FROM banners WHERE id = $banner_id";
  $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $banner_img_from_db))['your_img'];
  $old_photo_location = 'uploads/banner/'.$old_photo_name;
  unlink($old_photo_location);


  $file_name = $_FILES['your_img']['name'];
  $after_explode = explode(".", $file_name);
  $new_file_extention = end($after_explode);
  $new_file_name = $banner_id.".".$new_file_extention;
  $new_file_location = "uploads/banner/".$new_file_name;
  move_uploaded_file($_FILES['your_img']['tmp_name'], $new_file_location);


  $new_banner_img_update_query = "UPDATE banners SET your_img = '$new_file_name' WHERE id = $banner_id";
  mysqli_query($db_connect, $new_banner_img_update_query);
  header('location: banner_detail.php');

}
$banner_update_query = "UPDATE banners SET your_name = '$your_name', your_desc = '$your_desc' WHERE id = $banner_id";
mysqli_query($db_connect, $banner_update_query);
header('location: banner_detail.php');









?>
