<?php
require_once 'includes/db.php';


$portfolio_head_id = $_POST['portfolio_head_id'];
$portfolio_subheading = htmlentities($_POST['portfolio_subheading'], ENT_QUOTES);
$portfolio_heading = htmlentities($_POST['portfolio_heading'], ENT_QUOTES);


$update_portfolio_head_query = "UPDATE portfolio_headings SET portfolio_subheading = '$portfolio_subheading', portfolio_heading = '$portfolio_heading' WHERE id = $portfolio_head_id";
mysqli_query($db_connect, $update_portfolio_head_query);


header('location: portfolio_head.php');
 ?>
