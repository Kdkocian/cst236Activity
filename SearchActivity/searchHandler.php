<?php
require_once 'autoLoader.php';
require_once 'database.php';
$db = new myfuncs();
$conn = $db->getConnect();

$paTTern = mysqli_real_escape_string($conn, $_GET['search']);

$service = new UserBusinessService();

$users = $service->searchByFirstName($paTTern);

$display = new _displayAllUsers($users);

echo $display->print($users);
?>