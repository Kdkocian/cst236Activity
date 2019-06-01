<?php

class Person
{
    /*
     * Creator: Kyle David Kocian
     * Date: 5/26/2019
     */
    
    private $name;
    
    public function __construct($name)
    {
        echo "Hello my name is " .$name . "<br>";
        $this->name = $name;
        $this->username = "shad";
        $this->password = "cheeseburger";
    }
    
    public function walk()
    {
        echo "I am walking here......" . "<br>";
    }
        
    public function formalGreeting()
    {
       echo "Good day to you sir. You can address me as " . $this->name . "<br>"; 
    }
    
    public function spanishGreeting()
    {
       echo "Hola. Me llamo " . $this->name . "<br>"; 
    }
    
    public function login($a, $b)
    {
        if ($a == $this->username && $b == $this->password)
        {
            echo $this->name . " has been logged in successfully<br>";
        } else {
            echo "Login failed. The username or password is incorrect<br>";
        }
    }
}
?>

