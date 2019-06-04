<?php
require_once 'autoLoader.php';
require_once 'database.php';
$db = new myfuncs();
$conn = $db->getConnect();
echo "does it work here";
$paTTern = mysqli_real_escape_string($conn, $_GET['search']);
echo "how bout here";
$service = new UserBusinessService();
echo "and here";
$users = $service->searchByFirstName($paTTern);
echo "do you like cheeseburgers";
$display = new _displayAllUsers($users);
echo "only if this works";
echo $display->print($users);
?>