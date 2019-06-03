<?php
require_once 'autoLoader.php';
require_once 'database.php';
class UserDataService
{
    
    public function __construct()
    {
        
    }
    
    function findByFirstName($pattern)
    {
        $database = new myfuncs();
        
        $conn = $database->getConnect();
        
        $sql = "SELECT * FROM users WHERE First_Name LIKE '%$pattern$'";
        
        if($result = mysqli_query($conn, $sql))
        {
           $index = 0;
           $users = array();
           
           if (mysqli_num_rows($result) > 0) {
               $row=mysqli_fetch_array($result);
           }
           while ($row = $result->fetch_assoc())
           {
               $users[$index] = array($row["ID"], $row["First_Name"], $row["Last_Name"]);
               $index++;
           }
           $result->free();
           $conn->close();
           
           if (count($users) > 0)
           {
               return $users;
           }
           return NULL;
        } 
    }
}
?>
