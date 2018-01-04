<?php
if (isset($_POST['premise_id']) AND $_POST['premise_delete'] == "yes") {
	$sql = "DELETE FROM premises where premise_id = '" . $_POST['premise_id'] . "'";
	if (mysqli_query($conn, $sql)) {
		echo "<div class='p-3 mb-2 bg-success text-white'>SUCCESS</div>";
	} else {
		echo("Error description: " . mysqli_error($conn));
	}
}
?>
