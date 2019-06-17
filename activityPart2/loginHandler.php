<?php
require_once 'autoLoader.php';
include_once 'sessionStart.php';

echo "Login was Successful. Welcome "  ."Admin" . ".";

if (!isset($_POST['userName']) || $_POST['userName'] == "")
{
    echo "Enter your UserName";
    exit();
}

if (!isset($_POST['passWord']) || $_POST['passWord'] == "")
{
    echo "Enter your PassWord";
    exit();
}

$security = new security($_POST['userName'], $_POST['passWord']);

if ($security->authentication())
{
    $_SESSION['principle'] = true;
    include 'loginSuccess.php';
}
else
{
    $_SESSION['principle'] = false;
    include 'loginFailed.php';
}
?>