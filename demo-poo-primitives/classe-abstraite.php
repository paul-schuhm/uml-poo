<?php

/**
 * Démonstration du concept de classe abstraite. Une classe abstraite est une classe dont AU MOINS UNE méthode est abstraite. Elle peut être partiellement implémentée ou pas du tout. Les méhtodes abstraites doivent être implémentées (fournir du code à executer) par les classes enfants par héritage.
 */

//class = nouveau Type
//Classe abstraite
abstract class Person
{

    // Une méthode implémentée
    public function bookRoom()
    {
        echo static::class . " réserve une salle de réunion..." . PHP_EOL;
    }

    //Spécifique à chaque classe enfant (spécialisation)
    //Une méthode abstraite déclare un comportement SANS fournir d'implémentation (pas de bloc d'instructions!)
    abstract public function pay();
}

//Classe concrète (executable, possède une implémentation complète)
class Employee extends Person
{
    public function pay()
    {
        //Toute la logique propre au paiement d'un employé (contrat)
        echo "Procédure pour payer un employé" . PHP_EOL;
    }
}

class Manager extends Person
{
    public function pay()
    {
        //Toute la logique propre au paiement d'un manager (contrat)
        echo "Procédure pour payer un manager" . PHP_EOL;
    }
}

//L'entreprise crée un nouveau poste : Assistant to the regional manager. Comment on modifie ?
class AssistantRegionalManager extends Person
{

    public function pay()
    {
        //Toute la logique propre au paiement d'un manager (contrat)
        echo "Procédure pour payer un assistant de manageur régional" . PHP_EOL;
    }
}

//On ne peut pas instancier une classe abstraite. Normal, tout n'est pas implémenté. On execute QUOI ?
//new Person(); //Error !

//Usage :

//On récupère tous les salariés (tous postes confondus)
$people = [new Manager(), new Employee(), new Manager(), new AssistantRegionalManager()];

//CODE CLIENT
foreach ($people as $p) {
    //Tout le monde peut réserver une salle de réunion de la même manière (héritage)
    $p->bookRoom();
}

//CODE CLIENT (Module de paiement)

//Imaginons on a la liste de tous les salariés de l'entreprise, occupant différents postes. On imprime les fiches de paie et on lance les paiements.
foreach ($people as $p) {
    //Polymorphisme : meme message (meme methode) => différents comportements (pas le meme code qui s'execute)
    $p->pay();
}
