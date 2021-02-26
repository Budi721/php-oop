<?php

require_once "data/say_goodbye.php";
use Data\Traits\{Person, sayHello, sayGoodbye};

$person = new Person();
$person->hello("Eko");
$person->goodBye("Joko");

$person->name = "Susilo";
var_dump($person);

$person->run();