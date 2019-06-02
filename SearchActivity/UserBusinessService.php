<?php

class UserBusinessService
{
    public function __construct()
    {
        
    }
    
   public function searchByFirstName($pattern)
    {
        $service = new UserBusinessService();
        return $service->searchByFirstName($pattern);     
    }
}

