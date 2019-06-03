<?php
require_once 'autoLoader.php';
echo "it made it here";
$paTTern = $_POST["search"];

$service = new UserBusinessService();

$users = $service->searchByFirstName($paTTern);

$display = new _displayAllUsers($users);

echo $display->print($users);
?>