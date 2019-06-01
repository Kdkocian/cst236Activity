<?php
require_once 'Car.php';

$car = new Car();

$car->addTires(4);
$car->insertEngine(TRUE);
$car->pressure(32);
$car->start(TRUE);
$car->drive();
$car->stop(TRUE);
$car->restart(TRUE);
?>