<?php

$array = [
    "firstName" => "Eko",
    "middleName" => "Kurniawan",
    "lastName" => "Khannedy"
];

$object = (object)$array;

var_dump($object);

echo "First name : $object->firstName" . PHP_EOL;
echo "Middle name : $object->middleName" . PHP_EOL;
echo "Last name : $object->lastName" . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Eko", "Subang");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);



