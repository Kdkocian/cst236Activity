<?php
//require_once 'autoLoader.php';

class _displayAllUsers
{
    public function _construct($users)
    {
        if(count((array)$users) > 0)
        {
            echo '<link rel="stylesheet" type="text/css" href="style.css">';
            echo "<table>";
            echo "<tr><td>ID</td><td>First Name</td><td>Last Name</td></tr>";
            for ($x = 0; $x < count((array)$users); $x++)
            {
                echo "<tr>";
                echo "<td>" . $users[$x][0] . "</td>" .
                     "<td>" . $users[$x][1] . "</td>" .
                     "<td>" . $users[$x][2] . "</td>" ;
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
          echo "No results were found";   
        }
    }
}

?>