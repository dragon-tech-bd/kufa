<?php
require_once 'includes/db.php';


$social_id = $_POST['social_id'];
$social_icon = htmlentities($_POST['social_icon'], ENT_QUOTES);
$social_link = htmlentities($_POST['social_link'], ENT_QUOTES);


$update_social_query = "UPDATE banner_icons SET social_icon = '$social_icon', social_link = '$social_link' WHERE id = $social_id";
mysqli_query($db_connect, $update_social_query);


header('location: banner_social.php');
 ?>
