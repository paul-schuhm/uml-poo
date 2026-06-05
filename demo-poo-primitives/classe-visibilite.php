<?php



/* 
Démo sur concepts de classe, héritage et visibilité
*/

class Person
{
    //Redéfinir le constructeur
    public function __construct(
        //Déclarer des variables (attributs) de classe
        public string $fullName,
        private DateTimeImmutable $birthDate
    ) {}

    public function sayHi() {}
    private function tellSecret() {}
    protected function isGoodPerson() {}
}

//Employee hérite de Person
class Employee extends Person
{
    //Redéfinir le constructeur
    public function __construct(
        //Déclarer des variables (attributs) de classe
        public string $fullName,
        private DateTimeImmutable $birthDate
    ) {}

    public function isAppreciated()
    {
        // Un attribut/méthode protégée est public(accessible) dans les classes enfants, privé (non accessible) pour l'exterieur.
        echo "Appel à la méthode protégée" . PHP_EOL;
        return $this->isGoodPerson();
    }
}

//Instancier un objet à partir d'une classe
//Appel automatique à la méthode 'constructeur'
$person = new Person("John Doe", new DateTimeImmutable());

//Reste du monde
//Accéder à une propriété/méthode '->'
//echo $person->fullName. PHP_EOL;
//echo $person->birthDate. PHP_EOL; //Erreur !

//La visibilité s'applique aussi aux méthodes
$person->sayHi();
//$person->tellSecret(); //Erreur ! Méthode privée
//$person->isGoodPerson(); //Erreur ! Méthode protected (privée pour l'exterieur)

$employee = new Employee("John Doe", new DateTimeImmutable());
//Employe a hérité de la méthode sayHi de Person
$employee->sayHi();
$employee->isAppreciated();
