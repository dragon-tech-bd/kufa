<?php
require_once 'includes/db.php';
$file_name = $_FILES['image']['name'];
$after_explode = explode(".", $file_name);
$file_extention = end($after_explode);
$excepted_extention = ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG"];
if (in_array($file_extention, $excepted_extention)) {
    $site_name = $_POST['site_name'];

    $about_image_insert_query = "INSERT INTO about_images (site_name) VALUES('$site_name')";

    $about_image_insert_db = mysqli_query($db_connect, $about_image_insert_query);



    $last_id = mysqli_insert_id($db_connect);
    $new_file_name = $last_id.".".$file_extention;
    $new_file_location = "uploads/about/".$new_file_name;
    move_uploaded_file($_FILES['image']['tmp_name'], $new_file_location);

    $about_image_update_query = "UPDATE about_images SET image = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_connect, $about_image_update_query);
    header('location: about_image.php');
}
else {
  echo "Your file formate is not match!!!!";
}

?>
