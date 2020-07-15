<?php
require_once 'includes/db.php';
  $counter_icon = $_POST['counter_icon'];
  $counter_number = htmlentities($_POST['counter_number'], ENT_QUOTES);
  $counter_title = htmlentities($_POST['counter_title'], ENT_QUOTES);


  $counter_query = "INSERT INTO counters (counter_icon, counter_number, counter_title) VALUES ('$counter_icon', '$counter_number', '$counter_title')";
  $counter_from_db = mysqli_query($db_connect, $counter_query);
  header('location: counter.php');
  ?>
