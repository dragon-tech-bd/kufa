<?php
require_once 'includes/db.php';
  $service_head_one = htmlentities($_POST['service_head_one'], ENT_QUOTES);
  $service_head_two = htmlentities($_POST['service_head_two'], ENT_QUOTES);


  $service_head_query = "INSERT INTO service_headings (service_head_one, service_head_two) VALUES ('$service_head_one', '$service_head_two')";
  $service_head_from_db = mysqli_query($db_connect, $service_head_query);
  header('location: service_head.php');
  ?>
