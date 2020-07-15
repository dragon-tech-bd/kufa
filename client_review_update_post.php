<?php
require_once 'includes/db.php';
$client_review_id = $_POST['client_review_id'];
$client_review = htmlentities($_POST['client_review'], ENT_QUOTES);
$client_name = htmlentities($_POST['client_name'], ENT_QUOTES);
$client_designation = htmlentities($_POST['client_designation'], ENT_QUOTES);
if ($_FILES['client_image']['name']) {
  $client_img_from_db = "SELECT client_image FROM client_review WHERE id = $client_review_id";
  $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $client_img_from_db))['client_image'];
  $old_photo_location = 'uploads/testimonial/'.$old_photo_name;
  unlink($old_photo_location);


  $file_name = $_FILES['client_image']['name'];
  $after_explode = explode(".", $file_name);
  $new_file_extention = end($after_explode);
  $new_file_name = $banner_id.".".$new_file_extention;
  $new_file_location = "uploads/testimonial/".$new_file_name;
  move_uploaded_file($_FILES['client_image']['tmp_name'], $new_file_location);


  $new_client_img_update_query = "UPDATE client_reviews SET client_image = '$new_file_name' WHERE id = $client_review_id";
  mysqli_query($db_connect, $new_client_img_update_query);
  header('location: testimonial_review.php');

}
$client_update_query = "UPDATE client_reviews SET client_review = '$client_review', client_name = '$client_name', client_designation = '$client_designation' WHERE id = $client_review_id";
mysqli_query($db_connect, $client_update_query);
header('location: testimonial_review.php');









?>
