<?php

require_once "data/progammer.php";

$company = new Company();
$company = new Progammer("Eko");
var_dump($company);

$company = new BackendProgammer("Eko");
var_dump($company);

$company = new FrontendProgammer("Eko");
var_dump($company);


sayHelloProgammer(new Progammer("Eko"));
sayHelloProgammer(new BackendProgammer("Eko"));
sayHelloProgammer(new FrontendProgammer("Eko"));