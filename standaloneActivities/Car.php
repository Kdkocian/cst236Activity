<?php

class Car
{
   private $tires;
   private $hasengine = true;
   private $tirePressure;
   private $isRunning = true;
   private $brakeing = true;
   private $restart = true;
   
   public function addTires($numberOfNewTires)
   {
       if($numberOfNewTires > 0 && $numberOfNewTires <= 4)
       {
           if($this->tires + $numberOfNewTires > 4)
           {
               echo "You can only have a maximum of four tires. <br>";
           }
           else
           {
               echo "You have installed " . $numberOfNewTires . ", you now have " . $this->tires . "tires on your car <br>";
           }
       } 
       else 
       {
        echo "That is invalid number of tires.<br>";   
       }
   }
   
   public function insertEngine($engine)
   {
      if($this->hasengine == TRUE)
      {
          echo "Your have installed an engine into your car <br>";
      }
      else 
      {
          echo "Your engine may be back at the autoshop <br>";
      }
   }
   
   public function pressure($tpressure)
   {
       if($tpressure > 28 && $tpressure <= 40)
       {
           if($this->tirePressure + $tpressure > 40)
           {
               echo "You have to much air pressure in your tires <br>";
           }
           else
           {
               echo "You have aired up your tires to " . $tpressure . " psi. <br>";    
           }
       }
       else 
       {
           echo "Your tire pressure is lower than it should be <br>";
       }
   }
   
   public function start($crank)
   {
       if($this->isRunning == TRUE)
       {
           echo "Your engine in car is now started up <br>";
       }
       else 
       {
           echo "There must be something wrong with your cars starter <br>";
       }
   }
   
   public function drive()
   {
       $speeding = rand(1,60);
       
       echo "You start driving your car at " . $speeding . "mph <br>";
   }
   
   public function stop($brake)
   {
       if($this->brakeing == TRUE)
       {
            echo "You slowly press on the brake pedal to slow down your " . $this->tires . " to a stop. <br>";   
       }
       else 
       {
            echo "You might want to check your brake fluid <br>";
       }     
   }
   
   public function restart()
   {
       if($this->restart == TRUE)
       {
         echo "After you stop, you turn your key to restart your engine<br>";
       }
       else 
       {
         echo "You may have destroyed something <br>";  
       }
   }
}

