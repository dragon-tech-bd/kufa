<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$contact_read_query = "SELECT * FROM contacts";
$contacts = mysqli_query($db_connect, $contact_read_query);
?>
<div class="row">
  <div class="col-lg-12 text-center">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Visitor Name</th>
          <th>Visitor Email</th>
          <th>visitor Message</th>
        </tr>
      </thead>
      <?php
        $serial = 1;
       foreach ($contacts as $contact): ?>
      <tbody>
        <tr>
          <td><?=$serial++?></td>
          <td><?=$contact['contact_name']?></td>
          <td><?=$contact['contact_email']?></td>
          <td><?=$contact['contact_message']?></td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>

</div>

<?php
require_once 'includes/deshbord/footer.php';
?>
