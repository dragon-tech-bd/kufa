<?php
require_once 'includes/db.php';


$service_head_id = $_POST['service_head_id'];
$service_head_one = htmlentities($_POST['service_head_one'], ENT_QUOTES);
$service_head_two = htmlentities($_POST['service_head_two'], ENT_QUOTES);


$update_head_query = "UPDATE service_headings SET service_head_one = '$service_head_one', service_head_two = '$service_head_two' WHERE id = $service_head_id";
mysqli_query($db_connect, $update_head_query);


header('location: service_head.php');
 ?>
