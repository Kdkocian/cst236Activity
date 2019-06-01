<?php
include 'database.php';
$funcs = new myfuncs();
$conn = $funcs -> dbConnect();

$sql = "LOAD DATAS INFILE 'userNames.txt' INTO TABLE users";

mysqli_query($conn, $sql);
mysqli_close($conn);
?>