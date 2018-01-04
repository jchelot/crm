<?php
require_once 'header_contact.html';
?>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
      <form action="contact.php" method="post">
        <div class="form-group">
          <label for="InputFirstname">Firstname</label>
          <input type="text" name="InputFirstname" class="form-control" id="InputFirstname" aria-describedby="firstnameHelp" placeholder="Enter firstname">
        </div>
        <div class="form-group">
          <label for="InputLastname">Lastname</label>
          <input type="text" name="InputLastname" class="form-control" id="InputLastname" aria-describedby="lastnameHelp" placeholder="Enter lastname">
        </div>
        <div class="form-group">
          <label for="InputEmail">Email</label>
          <input type="text" name="InputEmail" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="InputPhone">Phone</label>
          <input type="text" name="InputPhone" class="form-control" id="InputPhone" aria-describedby="phoneHelp" placeholder="Enter phone">
        </div>
        <div class="form-group">
          <label for="InputAddressID">Address ID</label>
          <?php if (isset($_POST['premise_id'])) {
            echo "<input type='text' name='InputAddressID' class='form-control' id='InputAddressID' aria-describedby='addressidHelp' placeholder='Enter address id' value='" . $_POST['premise_id'] . "'>"; }
            else {
              echo "<input type='text' name='InputAddressID' class='form-control' id='InputAddressID' aria-describedby='addressidHelp' placeholder='Enter address id' value='0'>";
            }
            ?>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
      <div class="col-sm">
      </div>
    </div>
  </div>
  <br>

  <?php
  require 'footer_contact.html';
  ?>
