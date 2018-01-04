<?php
require_once 'header_premise.html';
require_once '../config/dbconfig.php';
$sql = "SELECT * FROM premises where premise_id = '" . $_GET['premise_id'] . "'";
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
          <form action="premise.php" method="post">
            <?php echo "<input type='hidden' name='premise_id' value='" . $row['premise_id'] . "'>"; ?>
            <div class="form-group">
              <label for="InputAddress">Address</label>
              <?php echo "<input type='text' name='InputAddress' class='form-control' id='InputAddress' aria-describedby='addressHelp' placeholder='Enter address' value='" . $row['address'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputPostcode">Postcode</label>
              <?php echo "<input type='text' name='InputPostcode' class='form-control' id='InputPostcode' aria-describedby='postcodeHelp' placeholder='Enter postcode' value='" . $row['postcode'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputCity">City</label>
              <?php echo "<input type='text' name='InputCity' class='form-control' id='InputCity' aria-describedby='cityHelp' placeholder='Enter city' value='" . $row['city'] . "'>"; ?>
            </div>
            <div class="form-group">
              <label for="InputCountry">Country</label>
              <?php echo "<input type='text' name='InputCountry' class='form-control' id='InputCountry' aria-describedby='countryHelp' placeholder='Enter country' value='" . $row['country'] . "'>"; ?>
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
          <form action="/contact/create_contact.php" method="post">
            <?php echo "<input type='hidden' name='premise_id' value='" . $row['premise_id'] . "'>"; ?>
            <button type="submit" class="btn btn-success">Add contact</button>
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
          <form action="premise.php" method="post">
            <?php echo "<input type='hidden' name='premise_id' value='" . $row['premise_id'] . "'>"; ?>
            <input type="hidden" name="premise_delete" value="yes">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
    <?php
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM premises where premise_id = '" . $_GET['premise_id'] . "'";
require_once 'read_premise.php';
$sql = "SELECT * FROM contacts where fk_premise_id = '" . $_GET['premise_id'] . "'";
require_once '../contact/read_contact.php';
mysqli_close($conn);
require 'footer_premise.html';
?>
