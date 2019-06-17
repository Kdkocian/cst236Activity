<?php
require_once 'database.php';
require_once 'functions.php';
$db = new funcs();
?>

<html>
    <head>
    	<title>Inventory</title>
    </head>
    <body>
    <table>
    <tr>
    	<th>Weapon ID</th>
    	<th>Weapon Name</th>
    	<th>Price</th>
	</tr>
    <?php
    $weapon = $db->getAllproducts();
    for($id = 0;$id < count($weapon);$id++){
        echo "<form action = 'inventorymanagement.php' method = 'POST'>";
        echo "<tr>";
            echo "<td>".$weapon[$id][0]."</td>";
            echo "<td>".$weapon[$id][1]."</td>";
            echo "<td>".$weapon[$id][2]."</td>";
            echo '<td><input type = "hidden" name = "ID" value = "'.$$weapon[$id][0].'">';
            echo '<input type="submit" name = "addCart" value="Add To Cart" /></td>';
        echo "</form>";
    }
    echo "<a href='login.php'>Log Out</a>" ."</br>";
    echo "<a href='viewCart.php'>Checkout/ViewCart</a>" ."</br>";
    ?>
    </table>
    </body>
</html>