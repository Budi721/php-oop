<?php

class Product {
    protected string $name;
    private int $price;

    function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getName(): string{
        return $this->name;
    }

    function getPrice(): int{
        return $this->price;
    }
}

class ProductDummy extends Product {
    public function info(){
        echo "Name $this->name";
    }
}

