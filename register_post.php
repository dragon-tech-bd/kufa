<?php
  require_once 'includes/db.php';
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];


  $user_insert_query  = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";
  $user_from_db = mysqli_query($db_connect, $user_insert_query);
  header('location: login.php');



?>
