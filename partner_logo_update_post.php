<?php
require_once 'includes/db.php';
$partner_logo_id = $_POST['partner_logo_id'];
$site_name = $_POST['site_name'];
if ($_FILES['partners']['name']) {
  $partner_logo_from_db = "SELECT partners FROM partners WHERE id = $partner_logo_id";
  $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $partner_logo_from_db))['partners'];
  $old_photo_location = 'uploads/partner/'.$old_photo_name;
  unlink($old_photo_location);


  $file_name = $_FILES['partners']['name'];
  $after_explode = explode(".", $file_name);
  $new_file_extention = end($after_explode);
  $new_file_name = $partner_logo_id.".".$new_file_extention;
  $new_file_location = "uploads/partner/".$new_file_name;
  move_uploaded_file($_FILES['partners']['tmp_name'], $new_file_location);


  $new_partner_logo_update_query = "UPDATE partners SET partners = '$new_file_name' WHERE id = $partner_logo_id";
  mysqli_query($db_connect, $new_partner_logo_update_query);
  header('location: partner.php');

}

?>
