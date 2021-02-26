<?php

require_once "data/student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value = 100;

$string = (string)$student1;
echo $string . PHP_EOL;

// Bisa Seperti Ini
echo $student1 . PHP_EOL;