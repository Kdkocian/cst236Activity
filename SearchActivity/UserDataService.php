<?php
require_once 'autoLoader.php';
require_once 'database.php';
class UserDataService
{
    
    public function __construct()
    {
        
    }
    
    public function findByFirstName($pattern)
    {
        $database = new myfuncs();
        
        $conn = $database->getConnect();
        echo "stuff";
        $sql = "SELECT * FROM users WHERE First_Name LIKE '%$pattern%'";
        
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_array($result))
        {
            echo $row['ID']," ", $row['First_Name'], " ", $row['Last_Name'] ."<br>";
        }
    }
}
?>
