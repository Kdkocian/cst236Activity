<?php
require_once 'autoLoader.php';

$paTTern = $_POST["search"];
echo "it made it here";
$service = new UserBusinessService();
echo "it made it this far";
$users = $service->searchByFirstName($paTTern);

$display = new _displayAllUsers($users);

echo $display->print($users);
?>