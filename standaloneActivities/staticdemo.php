<?php
require_once 'User.php';
$pw = 'asdf';
$pw2 = 'cheeseburger';
if(User::validatePassword($pw2))
    {
     echo "Password is long enough!<br>";
    } 
    else 
    {
     echo "Your password is too short!<br>";    
    }