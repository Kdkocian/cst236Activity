<?php
class myfuncs{
    function dbConnect() 
    {
        $servername = 'us-cdbr-iron-east-02.cleardb.net';
        $username = 'bad2754a68df73';
        $password = '008d5717';
        $dbname = 'heroku_484ecd05b300db2';
        //creates connection
        $conn =  new mysqli($servername, $username, $password, $dbname);
        //tests the connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>