<?php
require_once 'includes/db.php';


$testimonial_head_id = $_POST['testimonial_head_id'];
$testimonial_subheading = htmlentities($_POST['testimonial_subheading'], ENT_QUOTES);
$testimonial_heading = htmlentities($_POST['testimonial_heading'], ENT_QUOTES);


$update_testimonial_head_query = "UPDATE testimonial_headings SET testimonial_subheading = '$testimonial_subheading', testimonial_heading = '$testimonial_heading' WHERE id = $testimonial_head_id";
mysqli_query($db_connect, $update_testimonial_head_query);


header('location: testimonial_head.php');
 ?>
