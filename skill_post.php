<?php
require_once 'includes/db.php';
  $skill_year = htmlentities($_POST['skill_year'], ENT_QUOTES);
  $skill_title = htmlentities($_POST['skill_title'], ENT_QUOTES);
  $skill_parcent = $_POST['skill_parcent'];


  $skill_query = "INSERT INTO skills (skill_year, skill_title, skill_parcent) VALUES ('$skill_year', '$skill_title', '$skill_parcent')";
  $skill_from_db = mysqli_query($db_connect, $skill_query);
  header('location: skill.php');
  ?>
