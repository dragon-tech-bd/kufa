<?php
require_once 'includes/db.php';
  $service_icon = $_POST['service_icon'];
  $service_title = htmlentities($_POST['service_title'], ENT_QUOTES);
  $service_description = htmlentities($_POST['service_description'], ENT_QUOTES);


  $service_query = "INSERT INTO services (service_icon, service_title, service_description) VALUES ('$service_icon', '$service_title', '$service_description')";
  $service_from_db = mysqli_query($db_connect, $service_query);
  header('location: service_body.php');
  ?>
