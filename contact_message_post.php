<?php
session_start();
require_once 'includes/db.php';
  $contact_name = htmlentities($_POST['contact_name'], ENT_QUOTES);
  $contact_email = htmlentities($_POST['contact_email'], ENT_QUOTES);
  $contact_message = htmlentities($_POST['contact_message'], ENT_QUOTES);

  if (empty($_POST['contact_name'])) {
    echo "Enter Your Name";
  }
  elseif (!filter_var($_POST['contact_email'], FILTER_VALIDATE_EMAIL)) {
    echo "Enter Your Valid Email Address";
  }
  elseif (empty($_POST['user_password'])) {
    echo "Enter Your Password";
  }
  $contact_query = "INSERT INTO contacts (contact_name, contact_email, contact_message) VALUES ('$contact_name', '$contact_email', '$contact_message')";
  $contact_from_db = mysqli_query($db_connect, $contact_query);
  header('location: index.php');
  ?>
