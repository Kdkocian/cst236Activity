<?php
require_once 'autoLoader.php';

$paTTern = $_POST["First_Name"];

$service = new UserBusinessService();

$users = $service->searchByFirstName($paTTern);

$display = new _displayAllUsers($users);
?>