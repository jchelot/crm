<?php
require_once 'header_contact.html';

require_once '../config/dbconfig.php';
require_once 'update_contact.php';
require_once 'delete_contact.php';

$sql = "SELECT * FROM contacts";
require_once 'read_contact.php';
mysqli_close($conn);
require_once 'footer_contact.html';
?>
