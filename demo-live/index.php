<?php
// Ceci est un commentaire
/**
 * Ceci est un commentaire sur plusieurs
 * lignes
 */

//Déclarer une variable
$foo = "Ceci est une variable PHP";
$bar = 123;
//Afficher le résultat sur la sortie standard
// echo $foo;
//Afficher le contenu d'une variable avec son type
// var_dump($foo);
// var_dump($bar);
//Tableaux
$array = array(1, 'foo', 'bar', array(1,2,3));
//Afficher un tableau
// var_dump($array);
// print_r($array);
//Boucle : foreach
foreach ($array as $item) {
    //$item est ici un alias pour chaque élément du tableau
    //qu'on peut utiliser dans le coeur de la boucle
    if (is_array($item)) {
        print_r($item);
    } else {
        // Concaténer deux chaines de caractères avec '.'
        //PHP_EOL : constante built in pour le caractère de retour à la ligne
        echo $item . PHP_EOL;
    }
}

//Écriture d'une fonction
//Type hinting (Indication de type)

/**
 * Retourne un message saluant une personne
 * @param string $name Le nom de la personne à saluer
 */
function greet(string $name) : string
{
    //Corps de la fonction
    //Détail d'implémentation pour le monde extérieur à la fonction
    //(le reste du code)
    return "Hello " . $name . " !";
}

//Appel de la fonction
$message = greet('John');

//Affichage du résultat sur la sortie standard
echo $message . PHP_EOL;
