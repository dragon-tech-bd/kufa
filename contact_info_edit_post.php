<?php
require_once 'includes/db.php';


$contact_id = $_POST['contact_id'];
$contact_head_sm = htmlentities($_POST['contact_head_sm'], ENT_QUOTES);
$contact_main_head = htmlentities($_POST['contact_main_head'], ENT_QUOTES);
$contact_info_description = htmlentities($_POST['contact_info_description'], ENT_QUOTES);
$office = htmlentities($_POST['office'], ENT_QUOTES);
$address = htmlentities($_POST['address'], ENT_QUOTES);
$phone = htmlentities($_POST['phone'], ENT_QUOTES);
$email = htmlentities($_POST['email'], ENT_QUOTES);


$contact_update_query = "UPDATE contact_infos SET contact_head_sm = '$contact_head_sm', contact_main_head = '$contact_main_head', contact_info_description = '$contact_info_description', office = '$office', address = '$address', phone = '$phone', email = '$email'  WHERE id = $contact_id";
mysqli_query($db_connect, $contact_update_query);
header('location: contact_info.php');
 ?>
