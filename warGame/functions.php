<?php
class funcs{
function getAllproducts()
{
    $db = new myfuncs();
    $conn = $db->dbConnect();
    $sql = "SELECT weaponID, weaponName, weaponPrice FROM weapons";
    $products = array();
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_array($result))
    {
        $products[] = array($row['weaponID'], $row['weapponName'], $row['weaponPrice']);
    }
    mysqli_close($conn);
    return $products;
}
function getAllIncart()
{
    $db = new myfuncs();
    $conn = $db->dbConnect();
    
    $sql = "SELECT weaponID, weaponNAme, weaponPrice FROM cart";
    $weapon = array();
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_array($result))
    {
        $weapon[] = array($row['weaponID'], $row['waeponNAme'], $row['weaponPrice']);
    }
    mysqli_close($conn);
    return $weapon;
    }
}
?>