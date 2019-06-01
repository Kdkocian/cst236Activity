<?php 
include 'database.php';
$db = new myfuncs();
$searchresult = $_POST['SearchBar'];
$user = $db->searchUsersBysearchbar($searchresult);
?>
<html>
<head>
<title>Search Results</title>
</head>
<body>
<?php 
include 'displayusers.php';
?>
</body>
</html>