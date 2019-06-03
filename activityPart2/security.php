<?php
namespace activityPart2;

class security
{
    private $userName;
    private $passWord;
    
    public function __contruct($userName, $passWord)
    {
        $this->userName = $userName;
        $this->passWord = $passWord;
    }
    
    public function authentication()
    {
        if (strcasecmp($this->userName, "Admin") == 0 && $this->passWord == "password1")
        {
            return true;
        }
        return false;
    }
}

