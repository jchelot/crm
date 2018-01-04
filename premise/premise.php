<?php
require_once 'header_premise.html';

require_once '../config/dbconfig.php';
require_once 'update_premise.php';
require_once 'delete_premise.php';

$sql = "SELECT * FROM premises";
require_once 'read_premise.php';
mysqli_close($conn);

require_once 'footer_premise.html';
?>
