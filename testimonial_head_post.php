<?php
require_once 'includes/db.php';
  $testimonial_subheading = htmlentities($_POST['testimonial_subheading'], ENT_QUOTES);
  $testimonial_heading = htmlentities($_POST['testimonial_heading'], ENT_QUOTES);


  $testimonial_head_query = "INSERT INTO testimonial_headings (testimonial_subheading, testimonial_heading) VALUES ('$testimonial_subheading', '$testimonial_heading')";
  $testimonial_head_from_db = mysqli_query($db_connect, $testimonial_head_query);
  header('location: testimonial_head.php');
  ?>
