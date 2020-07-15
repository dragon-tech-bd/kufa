<?php
require_once 'includes/db.php';
$file_name = $_FILES['your_img']['name'];
$after_explode = explode(".", $file_name);
$file_extention = end($after_explode);
$excepted_extention = ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG"];
if (in_array($file_extention, $excepted_extention)) {
    $your_name = htmlentities($_POST['your_name'], ENT_QUOTES);
    $your_desc = htmlentities($_POST['your_desc'], ENT_QUOTES);

    $banner_insert_query = "INSERT INTO banners (your_name, your_desc) VALUES('$your_name', '$your_desc')";

    $banner_insert_db = mysqli_query($db_connect, $banner_insert_query);

    $last_id = mysqli_insert_id($db_connect);
    $new_file_name = $last_id.".".$file_extention;
    $new_file_location = "uploads/banner/".$new_file_name;
    move_uploaded_file($_FILES['your_img']['tmp_name'], $new_file_location);

    $banner_update_query = "UPDATE banners SET your_img = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_connect, $banner_update_query);
    header('location: banner.php');
}
else {
  echo "Your file formate is not match!!!!";
}

?>
