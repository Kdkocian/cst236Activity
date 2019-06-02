<?php 
require_once 'database.php';
$db = new myfuncs();
$conn = $db->dbConnect();

$searchresult = mysqli_real_escape_string($conn, $_GET['SearchBar']);

$sql = "Select * from users where Last_Name LIKE '%$searchresult%'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
    echo $row['ID'], $row['First_Name'], $row['Last_Name']."<br>";    
}
echo "<a href='search.html'>Searchpage</a>";

?>