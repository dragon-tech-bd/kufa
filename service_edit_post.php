<?php
require_once 'includes/db.php';


$service_id = $_POST['service_id'];
$service_icon = $_POST['service_icon'];
$service_title = htmlentities($_POST['service_title'], ENT_QUOTES);
$service_description = htmlentities($_POST['service_description'], ENT_QUOTES);


$update_query = "UPDATE services SET service_icon = '$service_icon', service_title = '$service_title', service_description = '$service_description' WHERE id = $service_id";
mysqli_query($db_connect, $update_query);
header('location: service_body.php');
 ?>
