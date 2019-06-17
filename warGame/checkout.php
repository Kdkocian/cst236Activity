<?php
include 'database.php';
$db = new myfuncs();
$conn = $db->dbConnect();
echo "Your order is now being Processed you should recieve in game in about 30 minutes" ."</br>";

$sql = "DELETE FROM cart WHERE weaponIDs > 0";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<a href='inventory.php'>Back to Store</a>";

?>