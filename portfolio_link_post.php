<?php
require_once 'includes/db.php';
  $portfolio_link = htmlentities($_POST['portfolio_link'], ENT_QUOTES);


  $portfolio_link_query = "INSERT INTO portfolio_links (portfolio_link) VALUES ('$portfolio_link')";
  $portfolio_link_from_db = mysqli_query($db_connect, $portfolio_link_query);
  header('location:portfolio_link.php');
  ?>
