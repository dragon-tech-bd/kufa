<?php
session_start();
require_once 'includes/db.php';

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$login_query = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
$login_from_db = mysqli_query($db_connect, $login_query);

if (empty($_POST['user_email'])) {
  echo "Enter Your Email";
}
elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
  echo "Enter Your Valid Email Address";
}
elseif ($login_from_db->num_rows == 1) {
  $_SESSION['login'] = "Login Successfull";
  $_SESSION['user_email'] = $user_email;
  header('location: deshbord.php');
}
elseif (empty($_POST['user_password'])) {
  echo "Enter Your Password";
}
else {
  header('location: login.php');
}

?>
