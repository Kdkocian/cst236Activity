<?php
require_once 'autoLoader.php';
class UserBusinessService
{
    public function __construct()
    {
   
    }
    
   public function searchByFirstName($pattern)
    {
        $service = new UserDataService();
        return $service->findByFirstName($pattern);  
    }
}

