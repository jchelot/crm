<?php
require_once 'header_premise.html';
?>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
      <form action="premise.php" method="post">
        <?php echo "<input type='hidden' name='contact_id' value='" . $_POST['contact_id'] . "'>"; ?>
        <div class="form-group">
          <label for="InputAddress">Address</label>
          <input type="text" name="InputAddress" class="form-control" id="InputAddress" aria-describedby="addressHelp" placeholder="Enter address">
        </div>
        <div class="form-group">
          <label for="InputPostcode">Postcode</label>
          <input type="text" name="InputPostcode" class="form-control" id="InputPostcode" aria-describedby="postcodeHelp" placeholder="Enter postcode">
        </div>
        <div class="form-group">
          <label for="InputCity">City</label>
          <input type="text" name="InputCity" class="form-control" id="InputCity" aria-describedby="cityHelp" placeholder="Enter city">
        </div>
        <div class="form-group">
          <label for="InputCountry">Country</label>
          <input type="text" name="InputCountry" class="form-control" id="InputCountry" aria-describedby="countryHelp" placeholder="Enter country">
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
require 'footer_premise.html';
?>
