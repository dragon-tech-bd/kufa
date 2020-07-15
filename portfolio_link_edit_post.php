<?php
require_once 'includes/db.php';


$portfolio_link_id = $_POST['portfolio_link_id'];
$portfolio_link = htmlentities($_POST['portfolio_link'], ENT_QUOTES);


$update_portfolio_link_query = "UPDATE portfolio_links SET portfolio_link = '$portfolio_link' WHERE id = $portfolio_link_id";
mysqli_query($db_connect, $update_portfolio_link_query);


header('location: portfolio_link.php');
 ?>
