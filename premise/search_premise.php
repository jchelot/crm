<?php
require_once 'header_premise.html';

require_once '../config/dbconfig.php';
$sql = "SELECT * FROM premises where address like '%" . $_POST['search_premise'] . "%' or postcode like '%" . $_POST['search_premise'] . "%'";
require_once 'read_premise.php';

require_once 'footer_premise.html';
?>
