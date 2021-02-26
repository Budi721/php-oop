<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Eko";
$person->address = null;

var_dump($person);
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Edi";
$person2->address = "Jakarta";
$person2->country = "Indonesia";

var_dump($person2);

# Error
# $person2->name = [];