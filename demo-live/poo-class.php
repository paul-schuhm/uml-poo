<?php

//Ce fichier présente comment déclarer une classe et instancier des objets


class Geometry2D
{
    //Propriété initialement est sans valeur : valeur NULL (absence de valeur)
    protected float $PI;

    //Constructeur de la classe
    function __construct($pi)
    {
        //Initialise mon objet avec la valeur de PI fournie

        $this->PI = $pi;

        //Rq: on suppose ici que PI n'est pas définie à l'échelle du programme.
        echo "Un nouvel objet a été crée" . PHP_EOL;
    }

    /**
     * Retourne le périmètre d'un cercle de rayon $radius
     */
    public function computeCirclePerimeter(float $radius): float
    {
        return 2 * $this->PI * $radius;
    }

    /**
     * Retourne la surface d'un cercle de rayon $radius
     */
    public function computeCircleSurface(float $radius): float
    {
        return $this->PI * $radius * $radius ;
    }
}

//Instancier un objet de type Geometry2D
$geometry = new Geometry2D(M_PI);

// echo $geometry->PI . PHP_EOL;

// //J'accede à la propriété PI depuis le monde exterieur.
// $geometry->PI = 1.;

// echo $geometry->PI . PHP_EOL;


class Geometry3D extends Geometry2D
{
    /**
     * Retourne le volume d'une sphère
     */
    public function computeSphereVolume(float $radius): float
    {

        return 4 / 3 * $this->PI * $radius * $radius * $radius ;
    }
}

$geometry3d = new Geometry3D(M_PI);
// echo $geometry->PI;

echo $geometry3d->computeCirclePerimeter(2) . PHP_EOL;
echo $geometry3d->computeSphereVolume(1) . PHP_EOL;

