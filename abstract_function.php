<?php
require_once "data/animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Eko";
$cat->run();

$dog = new Dog("Doggy");
$dog->name = "Progammer Now";
$dog->run();