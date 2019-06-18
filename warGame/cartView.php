<?php
require_once 'database.php';
require_once 'functions.php';
$func= new funcs();
$db = new myfuncs();
$conn = $db->dbConnect();
?>

<html>
	<head>
	<title>Shopping Cart</title>
	</head>
	<body>
	<table>
	<tr>
		<th>Weapon ID</th>
		<th>Weapon Name</th>
		<th>Weapon Price</th>
	</tr>
	<?php
	$weapon = $func->getAllIncart();
	for($id = 0;$id < count($weapon);$id++)
	{
    	   echo "<tr>";
        	   echo "<td>".$weapon[$id][0]."</td>";
        	   echo "<td>".$weapon[$id][1]."</td>";
        	   echo "<td>".$weapon[$id][2]."</td>";
           echo "</form></tr>";
	}
	
	$price = "SELECT SUM(weaponPricE) FROM cart" ."</br>";
	$row = mysqli_fetch_assoc($price);
	$sum = $row["totalsum"];
	
    echo "Your Total Price is: $'$sum'" ."</br>";
	
	mysqli_close($conn);
	echo "<form action = 'checkout.php' method = 'POST'>";
    	echo "<label>Card Number</label> <input type = 'text' pattern = '.{15,16}' style = 'width:120px' name = 'creditcard' required>" ."</br>";
    	echo "<label>Date</label> <input type = 'date' style = 'width: 120px' name = 'date' required>" ."</br>";
    	echo "<label>security code</label> <input type = 'text' style = 'width: 30px' name = 'securitycode' required>" ."</br>";
	echo "<input type = 'submit' name = checkout>";
	echo "</form>";
	?>
    </table>
    </body>
</html>
