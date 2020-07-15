<?php
require_once 'includes/db.php';
  $about_subhead = htmlentities($_POST['about_subhead'], ENT_QUOTES);
  $about_head = htmlentities($_POST['about_head'], ENT_QUOTES);
  $about_description = htmlentities($_POST['about_description'], ENT_QUOTES);


  $about_detail_query = "INSERT INTO about_details (about_subhead, about_head, about_description) VALUES ('$about_subhead', '$about_head', '$about_description')";
  $about_detail_from_db = mysqli_query($db_connect, $about_detail_query);
  header('location: about_detail.php');
  ?>
