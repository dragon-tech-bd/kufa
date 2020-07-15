<?php
require_once 'includes/db.php';
  $contact_head_sm = htmlentities($_POST['contact_head_sm'], ENT_QUOTES);
  $contact_main_head = htmlentities($_POST['contact_main_head'], ENT_QUOTES);
  $contact_info_description = htmlentities($_POST['contact_info_description'], ENT_QUOTES);
  $office = htmlentities($_POST['office'], ENT_QUOTES);
  $address = htmlentities($_POST['address'], ENT_QUOTES);
  $phone = htmlentities($_POST['phone'], ENT_QUOTES);
  $email = htmlentities($_POST['email'], ENT_QUOTES);


  $contact_info_query = "INSERT INTO contact_infos (contact_head_sm, contact_main_head, contact_info_description, office, address, phone, email) VALUES ('$contact_head_sm', '$contact_main_head', '$contact_info_description', '$office', '$address', '$phone', '$email')";
  $contact_from_db = mysqli_query($db_connect, $contact_info_query);
  ?>
