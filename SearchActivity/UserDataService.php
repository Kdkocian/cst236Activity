<?php
require_once 'autoLoader.php';
class UserDataService
{
    
    public function __construct()
    {
        
    }
    
    function findByFirstName($pattern)
    {
        $database = new myfuncs();
        
        $db = $database->getConnect();
        
        $sql = "SELECT * FROM users WHERE First_Name LIKE '%$pattern$'";
        
        if($result = mysqli_query($db, $sql))
        {
           $index = 0;
           $users = array();
           
           while ($row = $result->fetch_assoc())
           {
               $users[$index] = array($row["ID"], $row["First_Name"], $row["Last_Name"]);
               $index++;
           }
           $result->free();
           $db->close();
           
           if (count($users) > 0)
               return $users;
           return NULL;
        }
    }
}
?>
