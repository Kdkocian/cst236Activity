<?php
require_once 'database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

if(isset($_POST['addCart']))
{
    $weaponName = mysqli_real_escape_string($conn, $_POST['weaponName']);
    $weaponID = mysqli_real_escape_string($conn, $_POST['ID']);
    $weaponPrice = mysqli_real_escape_string($conn, $_POST['weaponPrice']);
    $sql = "INSERT INTO cart(weaponIDs, weaponNamE, weaponPricE) VALUES('$weaponID', '$weaponName', '$weaponPrice')";
    
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: inventory.php");
}
?>