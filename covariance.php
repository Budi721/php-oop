<?php

require_once "data/animal_shelter.php";
require_once "data/food.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adobt("Catty");

// Contravariance
$cat->eat(new \Data\AnimalFood());


$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adobt("Doggy");

$dog->eat(new \Data\AnimalFood());