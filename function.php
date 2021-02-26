<?php

require_once "data/Person.php";

$eko = new Person();
$eko->name = "Eko Kurniawan";

$eko->sayHello("Budi");

$joko = new Person();
$joko->name = "Jokowi";

$joko->sayHello(null);