<?php
require_once "data/product.php";

$product = new Product("Apple", "5000");

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 500);
echo $dummy->info();