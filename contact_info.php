<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
require_once 'includes/db.php';
require_once 'includes/deshbord/header.php';
require_once 'includes/deshbord/sidebar.php';

$contact_info_read_query = "SELECT * FROM contact_infos";
$infos = mysqli_query($db_connect, $contact_info_read_query);
?>
<div class="row">
  <div class="col-lg-12 text-center">
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Contact Heading Small</th>
          <th>Contact Main Heading</th>
          <th>Contact Description</th>
          <th>Office City</th>
          <th>Office Address</th>
          <th>Office Phone</th>
          <th>Office Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
        $serial = 1;
       foreach ($infos as $info): ?>
      <tbody>
        <tr>
          <td><?=$serial++?></td>
          <td><?=$info['contact_head_sm']?></td>
          <td><?=$info['contact_main_head']?></td>
          <td><?=$info['contact_info_description']?></td>
          <td><?=$info['office']?></td>
          <td><?=$info['address']?></td>
          <td><?=$info['phone']?></td>
          <td><?=$info['email']?></td>
          <td>
            <a type="button" href="contact_info_edit.php?contact_id=<?=$info['id']?>" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>
    <!-- <div class="col-lg-4">
      <form method="post" action="contact_info_post.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Head sm</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="contact_head_sm">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Main Head</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="contact_main_head">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Info Description</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="contact_info_description">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Office</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="office">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="address">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div> -->
</div>



<?php
require_once 'includes/deshbord/footer.php';
?>
