<?php
require_once 'includes/db.php';


$skill_id = $_POST['skill_id'];
$skill_year = htmlentities($_POST['skill_year'], ENT_QUOTES);
$skill_title = htmlentities($_POST['skill_title'], ENT_QUOTES);
$skill_parcent = htmlentities($_POST['skill_parcent'], ENT_QUOTES);


$update_skill_query = "UPDATE skills SET skill_year = '$skill_year', skill_title = '$skill_title', skill_parcent = '$skill_parcent' WHERE id = $skill_id";
mysqli_query($db_connect, $update_skill_query);


header('location: skill.php');
 ?>
