<?php
// Edit
if (isset($_POST['InputAddress']) AND isset($_POST['InputPostcode']) AND isset($_POST['InputCity']) AND isset($_POST['InputCountry'])) {
  if (isset($_POST['premise_id'])) {
    $sql = "UPDATE premises set address = '" . $_POST['InputAddress'] . "',
    postcode = '" . $_POST['InputPostcode'] . "',
    city = '" . $_POST['InputCity'] . "',
    country = '" . $_POST['InputCountry'] . "' where premise_id = " . $_POST['premise_id'] . "";
    if (mysqli_query($conn, $sql)) {
      echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
    }else {
      echo("Error description: " . mysqli_error($conn));
    }
  } else {
// Create
    $sql = "INSERT INTO premises (address, postcode, city, country) values ('" . $_POST['InputAddress'] . "',
    '" . $_POST['InputPostcode'] . "',
    '" . $_POST['InputCity'] . "',
    '" . $_POST['InputCountry'] . "')";
    if (mysqli_query($conn, $sql)) {
      echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
    }else {
      echo("Error description: " . mysqli_error($conn));
    }
    if(isset($_POST['contact_id'])) {
      $sql = "UPDATE contacts set fk_premise_id = '" . mysqli_insert_id($conn) . "' where contact_id = '" . $_POST['contact_id'] . "'";
      mysqli_query($conn, $sql);
    }
  }
}
?>
