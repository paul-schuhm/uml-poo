<?php

//Illustre le mécanisme d'overriding (surcharge des méthodes dans les classes enfant)

class A
{
    public function a(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}

class B extends A
{
    //Surcharge de la méthode a
    #[Override]
    public function a(string $name): string
    {
        return 'Bonjour ' . $name . ' !';
    }
}

$a = new A();
echo $a->a('Julie') . PHP_EOL;
$b = new B();
echo $b->a('Julie') . PHP_EOL;
