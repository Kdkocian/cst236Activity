<?php
include_once 'sessionStart.php';

if (!isset($_SESSION['principle']) || $_SESSION['principle'] == NULL || $_SESSION['principle'] == false)
{
    header("Location: login.html");    
}
?>