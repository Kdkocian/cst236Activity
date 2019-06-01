<?php
require_once 'Batman.php';
require_once 'Superman.php';

$bm = new Batman('Batman', rand(1,1000));
$sm = new Superman('Superman', rand(1,1000));

while(!$bm->isDead() && !$sm->isDead()){
   echo "Superman hits Batman for " .$bm->determinHealth($sm->attack()). "<br>";
   echo "Batman hits Superman for " .$sm->determinHealth($bm->attack()). "<br>";
}
if($bm->isDead()){
    echo "Batman is Dead";
} else {
    echo "Superman is Dead";
}
?>