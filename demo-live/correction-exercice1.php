<?php

///Suggestion de correction pour l'exercice 1 PHP. Implémentation de la classe définie à partir du Diagramme de classe conçu en classe.

//Enumération pour indiquer l'ensemble des valeurs possibles prises par la propriete sexe
enum Sexe
{
    case M;
    case F;
};

class Personne
{
    //Attributs privés

    //Variables statiques (variables définies à l'échelle de la classe, partagées par toutes les instances de Personne)
    private static float $coeffChargesSalaire = 0.15;
    private static float $coeffChargesAutresRevenus = 0.20;

    public function __construct(
        private string $prenom,
        private string $nom,
        private DateTime $dateDeNaissance,
        //sexe est de type 'Sexe', un énum défini plus haut
        private Sexe $sexe,
        private int $autresRevenus = 0,
        private bool $estDecede = false,
        private int $salaire = 0,
    ) {
    }

    //Méthodes

    /**
     * Retourne l'âge de la personne en années
     */
    public function calculAge(): int
    {
        $dateDuJour = new DateTime();
        $diff = $dateDuJour->diff($this->dateDeNaissance);
        $age = intval($diff->format('%Y'));
        return $age;
    }

    /**
     * Retourne le montant total des charges sur les revenus (en centimes d'EURO). Le calcul change en fonction de si la personne est décédée ou non.
     * @return int
     */
    public function calculCharges(): int
    {

        //S'il faut changer la manière de calculer en fonction du statut décédé ou non de la personne, on le fera aussi.

        return
        static::$coeffChargesAutresRevenus *
        $this->autresRevenus +
        static::$coeffChargesSalaire *
        $this->salaire;
    }

    /**
     * Un "getter" (acces en lecture à une propriété de personne). Attention brise le concept d'encapsulation !
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Un "setter" (acces controlé en ecriture à prénom).
     * Attention brise le concept d'encapsulation !
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
}

$personne = new Personne(
    'Paul',
    'Schuhmacher',
    new DateTime('1990-06-21'),
    Sexe::M
);

echo 'Age : ' . $personne->calculAge() . PHP_EOL;
echo 'Charges : ' . $personne->calculCharges() . ' centimes d\'EUROS' . PHP_EOL;
