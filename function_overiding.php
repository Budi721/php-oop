<?php

require_once "data/manager.php";

$manager = new Manager();
$manager->name = "Eko";
$manager->sayHello("Joko");

$vp = new VicePresiden();
$vp->name = "Edo";
$vp->sayHello("Joko");
