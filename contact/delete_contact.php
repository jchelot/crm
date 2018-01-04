<?php
if (isset($_POST['contact_id']) AND $_POST['contact_delete'] == "yes") {
	$sql = "DELETE FROM contacts where contact_id = '" . $_POST['contact_id'] . "'";
	if (mysqli_query($conn, $sql)) {
		echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
	} else {
		echo("Error description: " . mysqli_error($conn));
	}
}
?>
