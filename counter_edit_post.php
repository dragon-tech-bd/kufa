<?php
require_once 'includes/db.php';


$counter_id = $_POST['counter_id'];
$counter_icon = $_POST['counter_icon'];
$counter_number = htmlentities($_POST['counter_number'], ENT_QUOTES);
$counter_title = htmlentities($_POST['counter_title'], ENT_QUOTES);


$counter_update_query = "UPDATE counters SET counter_icon = '$counter_icon', counter_number = '$counter_number', counter_title = '$counter_title' WHERE id = $counter_id";
mysqli_query($db_connect, $counter_update_query);
header('location: counter.php');
 ?>
