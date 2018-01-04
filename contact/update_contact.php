<?php
// Edit
if (isset($_POST['InputFirstname']) AND isset($_POST['InputLastname']) AND isset($_POST['InputEmail']) AND isset($_POST['InputPhone'])) {
  if (isset($_POST['contact_id'])) {
    if (isset($_POST['InputAddressID'])) {
      $sql = "UPDATE contacts set firstname = '" . $_POST['InputFirstname'] . "',
      lastname = '" . $_POST['InputLastname'] . "',
      email = '" . $_POST['InputEmail'] . "',
      phone = '" . $_POST['InputPhone'] . "',
      fk_premise_id = '" . $_POST['InputAddressID'] . "' where contact_id = " . $_POST['contact_id'] . "";
      echo $sql;
      if (mysqli_query($conn, $sql)) {
        echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
      }else {
        echo("Error description: " . mysqli_error($conn));
      }
    } else {
      $sql = "UPDATE contacts set firstname = '" . $_POST['InputFirstname'] . "',
      lastname = '" . $_POST['InputLastname'] . "',
      email = '" . $_POST['InputEmail'] . "',
      phone = '" . $_POST['InputPhone'] . "' where contact_id = " . $_POST['contact_id'] . "";
      echo $sql;
      if (mysqli_query($conn, $sql)) {
        echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
      }else {
        echo("Error description: " . mysqli_error($conn));
      }
    }
  } else {
// Create
    if($_POST['InputAddressID'] == 0) {
      $sql = "INSERT INTO contacts (firstname, lastname, email, phone) values ('" . $_POST['InputFirstname'] . "',
      '" . $_POST['InputLastname'] . "',
      '" . $_POST['InputEmail'] . "',
      '" . $_POST['InputPhone'] . "')";
      if (mysqli_query($conn, $sql)) {
        echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
      }else {
        echo("Error description: " . mysqli_error($conn));
      }
    }
    else
    {
      $sql = "INSERT INTO contacts (firstname, lastname, email, phone, fk_premise_id) values ('" . $_POST['InputFirstname'] . "',
      '" . $_POST['InputLastname'] . "',
      '" . $_POST['InputEmail'] . "',
      '" . $_POST['InputPhone'] . "',
      '" . $_POST['InputAddressID'] . "')";
      echo $sql;
      if (mysqli_query($conn, $sql)) {
        echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
      }else {
        echo("Error description: " . mysqli_error($conn));
      }
    }
  }
}
?>
