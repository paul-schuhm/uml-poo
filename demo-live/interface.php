<?php

//Illustre le concept d'interface

//Une classe complètement abstraite (abstraite pure) définit en fait une interface d'un objet. On utilise donc le construct interface où par définition toutes les méthodes sont abstraites

interface A
{
    //En général une interface ne définit (et ne devrait pas définir d'attributs). De toute manière en PHP, c'est impossible.
    //On déclare une méthode sans fournir d'implémentation (methode abstraite)
    public function a(string $name): string;
}

//La classe B implémente A, elle fournit une implémentation à toutes les méthodes abstraites. B est une classe concrète.
class B implements A
{
    public function a(string $name): string
    {
        return 'Bonjour ' . $name . ' !';
    }
}

//Je peux l'instancier
$b = new B();
echo $b->a('Archibald') . PHP_EOL;
