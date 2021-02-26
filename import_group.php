<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict1 = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

helpMe();