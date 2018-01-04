<?php
require_once 'header_contact.html';

require_once '../config/dbconfig.php';
$sql = "SELECT * FROM contacts where firstname like '%" . $_POST['search_contact'] . "%' or lastname like '%" . $_POST['search_contact'] . "%'";
require_once 'read_contact.php';

require_once 'footer_contact.html';
?>
