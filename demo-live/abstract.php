<?php

//Illustre le principe de méthode et de classes abstraites

//Classe A est abstraite
abstract class A
{
    //Déclare une méthode abstraite : on donne seulement la signature
    //sans fournir d'implémentation (pas de corps à la méthode)
    abstract public function a(string $name): string;
}

//Classe B hérite de A, elle fournit une implémentation à la méthode a. Elle est donc concrète.
class B extends A
{
    public function a(string $name): string
    {
        return 'Hello ' . $name . ' !';
    }
}

$b = new B();
echo $b->a('Enzo') . PHP_EOL;
