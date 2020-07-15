<?php
require_once 'includes/db.php';
$file_name = $_FILES['client_image']['name'];
$after_explode = explode(".", $file_name);
$file_extention = end($after_explode);
$excepted_extention = ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG"];
if (in_array($file_extention, $excepted_extention)) {
    $client_review = htmlentities($_POST['client_review'], ENT_QUOTES);
    $client_name = htmlentities($_POST['client_name'], ENT_QUOTES);
    $client_designation = htmlentities($_POST['client_designation'], ENT_QUOTES);

    $client_image_insert_query = "INSERT INTO client_reviews (client_review, client_name, client_designation) VALUES('$client_review', '$client_name', '$client_designation')";

    $client_image_insert_db = mysqli_query($db_connect, $client_image_insert_query);



    $last_id = mysqli_insert_id($db_connect);
    $new_file_name = $last_id.".".$file_extention;
    $new_file_location = "uploads/testimonial/".$new_file_name;
    move_uploaded_file($_FILES['client_image']['tmp_name'], $new_file_location);

    $client_image_update_query = "UPDATE client_reviews SET client_image = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_connect, $client_image_update_query);
    header('location: testimonial_review.php');
}
else {
  echo "Your file formate is not match!!!!";
}

?>
