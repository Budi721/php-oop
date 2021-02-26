<?php

require_once "helper/math_helper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();
echo $mathHelper::$name . PHP_EOL;

$mathHelper::$name = "Eko";
echo $mathHelper::$name . PHP_EOL; # Dapat dirubah

$result = $mathHelper::sum(21, 24, 33, 2);
echo "Result : $result" . PHP_EOL;