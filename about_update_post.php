<?php
require_once 'includes/db.php';


$about_detail_id = $_POST['about_detail_id'];
$about_subhead = htmlentities($_POST['about_subhead'], ENT_QUOTES);
$about_head = htmlentities($_POST['about_head'], ENT_QUOTES);
$about_description = htmlentities($_POST['about_description'], ENT_QUOTES);


$about_detail_update_query = "UPDATE about_details SET about_subhead = '$about_subhead', about_head = '$about_head', about_description = '$about_description' WHERE id = $about_detail_id";
mysqli_query($db_connect, $about_detail_update_query);


header('location: about_detail.php');
 ?>
