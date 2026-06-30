<?php

//Démonstration du construct d'"Interface" et du polymorphisme.

//Interface (construct fournit par vos langages), cas particulier de classe abstraites, où toutes les méthodes sont abstraites et publiques !

//Ex : Pattern Repository = abstraction sur l'origine et l'emplacement des données. Données exposée sous la forme d'une collection.
interface PersonRepository
{
    public function save();
    public function archive();
    public function findBydId($id);
    public function findAll();
}

/*Strictement équivalent à une classe abstraite avec toutes les méthodes abstraites
abstract class PR{
	abstract public function save();
	abstract public function archive();
	abstract public function find($name);
	abstract public function findAll();
}
*/

//Une implémentation possible du 'Repository' avec une bdd relationnelle
class PersonRepositorySGBDR implements PersonRepository
{
    //Fournir une implémentation pour toutes les méthodes
    //Elle doit respecter le "contrat" défini par l'interface (signature méthode : nom, arguments, types)
    public function save()
    {
        echo "saving in relationnal database (MySQL par ex.) ..." . PHP_EOL;
    }
    public function archive() {}
    public function findBydId($id) {}
    public function findAll() {}
}


class PersonRepositoryAmazonBucket implements PersonRepository
{
    public function save()
    {
        echo "saving in Amazon Bucket..." . PHP_EOL;
    }
    public function archive() {}
    public function findBydId($id) {}
    public function findAll() {}
}

$choice = readline("Où souhaitez-vous enregistrer les données ? (mysql ou amazon)");

if ('amazon' === $choice) {
    $repository = new PersonRepositoryAmazonBucket();
} else if ('mysql' === $choice) {
    $repository = new PersonRepositorySGBDR();
} else {
    echo "Type de stockage inconnu du système" . PHP_EOL;
    exit(1);
}

//AILLEURS DANS LE SYSTEME (code client, qui utilise notre module Repository)
//Code client indépendant de l'implémentation (que ce soit une bdd relationnelle, ou un service Amazon)
//Polymorphisme : même message (même méthode appelée) = comportements différents !
$repository->save();
