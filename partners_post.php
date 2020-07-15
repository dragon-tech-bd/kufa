<?php
require_once 'includes/db.php';
$file_name = $_FILES['partners']['name'];
$after_explode = explode(".", $file_name);
$file_extention = end($after_explode);
$excepted_extention = ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG"];
if (in_array($file_extention, $excepted_extention)) {
    $site_name = $_POST['site_name'];

    $partners_logo_insert_query = "INSERT INTO partners (site_name) VALUES('$site_name')";

    $partners_logo_insert_db = mysqli_query($db_connect, $partners_logo_insert_query);



    $last_id = mysqli_insert_id($db_connect);
    $new_file_name = $last_id.".".$file_extention;
    $new_file_location = "uploads/partner/".$new_file_name;
    move_uploaded_file($_FILES['partners']['tmp_name'], $new_file_location);

    $partner_logo_update_query = "UPDATE partners SET partners = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_connect, $partner_logo_update_query);
    header('location: partner.php');
}
else {
  echo "Your file formate is not match!!!!";
}

?>
