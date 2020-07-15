<?php
require_once 'includes/db.php';
$file_name = $_FILES['portfolio_image']['name'];
$after_explode = explode(".", $file_name);
$file_extention = end($after_explode);
$excepted_extention = ["jpg", "png", "jpeg", "JPG", "PNG", "JPEG"];
if (in_array($file_extention, $excepted_extention)) {
    $portfolio_title = htmlentities($_POST['portfolio_title'], ENT_QUOTES);
    $portfolio_head = htmlentities($_POST['portfolio_head'], ENT_QUOTES);

    $portfolio_item_insert_query = "INSERT INTO portfolio_items (portfolio_title, portfolio_head) VALUES('$portfolio_title', '$portfolio_head')";

    $portfolio_item_insert_db = mysqli_query($db_connect, $portfolio_item_insert_query);



    $last_id = mysqli_insert_id($db_connect);
    $new_file_name = $last_id.".".$file_extention;
    $new_file_location = "uploads/portfolio/".$new_file_name;
    move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $new_file_location);

    $portfolio_item_update_query = "UPDATE portfolio_items SET portfolio_image = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_connect, $portfolio_item_update_query);
    header('location: portfolio_item.php');
}
else {
  echo "Your file formate is not match!!!!";
}

?>
