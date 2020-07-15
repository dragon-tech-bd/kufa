<?php
require_once 'includes/db.php';
$portfolio_item_id = $_POST['portfolio_item_id'];
$portfolio_title = htmlentities($_POST['portfolio_title'], ENT_QUOTES);
$portfolio_head = htmlentities($_POST['portfolio_head'], ENT_QUOTES);
if ($_FILES['portfolio_image']['name']) {
  $portfolio_img_from_db = "SELECT portfolio_image FROM portfolio_items WHERE id = $portfolio_item_id";
  $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $portfolio_img_from_db))['portfolio_image'];
  $old_photo_location = 'uploads/portfolio/'.$old_photo_name;
  unlink($old_photo_location);


  $file_name = $_FILES['portfolio_image']['name'];
  $after_explode = explode(".", $file_name);
  $new_file_extention = end($after_explode);
  $new_file_name = $banner_id.".".$new_file_extention;
  $new_file_location = "uploads/portfolio/".$new_file_name;
  move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $new_file_location);


  $new_portfolio_img_update_query = "UPDATE portfolio_items SET portfolio_image = '$new_file_name' WHERE id = $portfolio_item_id";
  mysqli_query($db_connect, $new_portfolio_img_update_query);
  header('location: portfolio_item.php');

}
$portfolio_update_query = "UPDATE portfolio_items SET portfolio_title = '$portfolio_title', portfolio_head = '$portfolio_head' WHERE id = $portfolio_item_id";
mysqli_query($db_connect, $portfolio_update_query);
header('location: portfolio_item.php');









?>
