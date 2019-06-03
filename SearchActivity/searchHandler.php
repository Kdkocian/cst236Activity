<?php
require_once 'autoLoader.php';

$paTTern = $_GET["search"];

$service = new UserBusinessService();

$users = $service->searchByFirstName($paTTern);

$display = new _displayAllUsers($users);

echo $display->print($users);
?>