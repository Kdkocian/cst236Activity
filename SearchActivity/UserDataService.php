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
        $servername = 'us-cdbr-iron-east-02.cleardb.net';
        $username = 'bad2754a68df73';
        $password = '008d5717';
        $dbname = 'heroku_484ecd05b300db2';
        //creates connection
        $db =  mysqli_connect($servername, $username, $password, $dbname);
        //tests the connection
        if ($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
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
