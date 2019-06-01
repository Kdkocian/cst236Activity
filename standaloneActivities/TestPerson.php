<?php
require_once 'Person.php';

$person = new Person("Kyle");
$person->walk();

$person2 = new Person("Stewart");
$person2->formalGreeting();

$person3 = new Person("Juan");
$person3->spanishGreeting();

$person3->login("shad", "asdf");
$person3->login("shad", "cheeseburger");

?>