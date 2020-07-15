<?php
require_once 'includes/db.php';
$file_name = $_FILES['logo']['name'];
$after_explode = explode(".", $file_name);
$file_extention = end($after_explode);
$excepted_extention = ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG"];
if (in_array($file_extention, $excepted_extention)) {
  if ($_FILES['logo']['size'] <= 50000) {
    $site_name = $_POST['site_name'];

    $logo_insert_query = "INSERT INTO logos (site_name) VALUES('$site_name')";

    $logo_insert_db = mysqli_query($db_connect, $logo_insert_query);



    $last_id = mysqli_insert_id($db_connect);
    $new_file_name = $last_id.".".$file_extention;
    $new_file_location = "uploads/logo/".$new_file_name;
    move_uploaded_file($_FILES['logo']['tmp_name'], $new_file_location);

    $logo_update_query = "UPDATE logos SET logo = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_connect, $logo_update_query);
    header('location: navbar.php');
}
else {
  echo "Your file size is more then 50KB!!!";
}
}
else {
  echo "Your file formate is not match!!!!";
}

?>
