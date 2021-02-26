<?php

$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu anjing, bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "Eko Kurniawan-Khannedy,Progammer");
var_dump($result);