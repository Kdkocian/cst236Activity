<?php
require_once 'autoLoader.php';

$paTTern = $_POST["search"];

$service = new UserBusinessService();

$users = $service->searchByFirstName($paTTern);
echo "did it make it here"; "<br>";
echo $_POST["search"];
$display = new _displayAllUsers($users);

echo $display->print($users);
?>