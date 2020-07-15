<?php
require_once 'includes/db.php';
  $portfolio_subheading = htmlentities($_POST['portfolio_subheading'], ENT_QUOTES);
  $portfolio_heading = htmlentities($_POST['portfolio_heading'], ENT_QUOTES);


  $portfolio_head_query = "INSERT INTO portfolio_headings (portfolio_subheading, portfolio_heading) VALUES ('$portfolio_subheading', '$portfolio_heading')";
  $portfolio_head_from_db = mysqli_query($db_connect, $portfolio_head_query);
  header('location: portfolio_head.php');
  ?>
