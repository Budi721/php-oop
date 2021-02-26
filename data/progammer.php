<?php

class Progammer {
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgammer extends Progammer {
}

class FrontendProgammer extends Progammer {
}

class Company {
    public Progammer $progammer;
}

# Polymorphism pada argument fungsi
function sayHelloProgammer(Progammer $progammer) {
    if ($progammer instanceof BackendProgammer) {
        echo "Hi Backend Progammer $progammer->name." . PHP_EOL;
    } elseif ($progammer instanceof FrontendProgammer) {
        echo "Hi Frontend Progammer $progammer->name." . PHP_EOL;
    } elseif ($progammer instanceof Progammer) {
        echo "Hi Progammer $progammer->name." . PHP_EOL;
    }
}