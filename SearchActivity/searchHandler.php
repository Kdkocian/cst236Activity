<?php
require_once 'autoLoader.php';

$paTTern = $_POST["search"];

$service = new UserBusinessService();

$users = $service->searchByFirstName($paTTern);

$display = new _displayAllUsers($users);

echo $display->print($users);
?>