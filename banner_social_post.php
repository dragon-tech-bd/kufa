<?php
require_once 'includes/db.php';
  $social_icon = htmlentities($_POST['social_icon'], ENT_QUOTES);
  $social_link = htmlentities($_POST['social_link'], ENT_QUOTES);


  $social_link_query = "INSERT INTO banner_icons (social_icon, social_link) VALUES ('$social_icon', '$social_link')";
  $social_link_from_db = mysqli_query($db_connect, $social_link_query);
  header('location: banner_social.php');
  ?>
