<?php
require_once 'header_contact.html';
require_once '../config/dbconfig.php';
$sql = "SELECT * FROM contacts where contact_id = '" . $_GET['contact_id'] . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <form action="contact.php" method="post">
            <?php echo "<input type='hidden' name='contact_id' value='" . $row['contact_id'] . "'>"; ?>
            <div class="form-group">
              <label for="InputFirstname">Firstname</label>
              <?php echo "<input type='text' name='InputFirstname' class='form-control' id='InputFirstname' aria-describedby='firstnameHelp' placeholder='Enter firstname' value='" . $row['firstname'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputLastname">Lastname</label>
              <?php echo "<input type='text' name='InputLastname' class='form-control' id='InputLastname' aria-describedby='lastnameHelp' placeholder='Enter lastname' value='" . $row['lastname'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputEmail">Email</label>
              <?php echo "<input type='text' name='InputEmail' class='form-control' id='InputEmail' aria-describedby='emailHelp' placeholder='Enter email' value='" . $row['email'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputPhone">Phone</label>
              <?php echo "<input type='text' name='InputPhone' class='form-control' id='InputPhone' aria-describedby='phoneHelp' placeholder='Enter phone' value='" . $row['phone'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputAddressID">Address ID</label>
              <?php echo "<input type='text' name='InputAddressID' class='form-control' id='InputAddressID' aria-describedby='addressidHelp' placeholder='Enter address id' value='" . $row['fk_premise_id'] . "'>"; ?>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <form action="../premise/create_premise.php" method="post">
            <?php echo "<input type='hidden' name='contact_id' value='" . $row['contact_id'] . "'>"; ?>
            <button type="submit" class="btn btn-success">Add premise</button>
          </form>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <form action="contact.php" method="post">
            <?php echo "<input type='hidden' name='contact_id' value='" . $row['contact_id'] . "'>"; ?>
            <input type="hidden" name="contact_delete" value="yes">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
    <?php
    $fk_premise_id = $row['fk_premise_id'];
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM contacts where contact_id = '" . $_GET['contact_id'] . "'";
require_once 'read_contact.php';
$sql = "SELECT * FROM premises where premise_id = '" . $fk_premise_id . "'";
require_once '../premise/read_premise.php';
mysqli_close($conn);

require 'footer_contact.html';
?>
