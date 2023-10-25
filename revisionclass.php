<?php

// interface InterfaceApprennant
// {
//     public function Presentation();
//     public function FaireCourse();
//     public function Evaluation();
// }

// interface InterfaceFormateur
// {
//     // public function Presentation();

//     public function EvaluerEtudiant();
// }

// class Apprenants implements InterfaceApprennant
// {
//     private $firstName;
//     private $lastName;
//     private $Matricule;
//     public $dateNaissance;
//     public function __construct($lastName, $firstName, $Matricule, $dateNaissance)
//     {
//         $this->setLastName($lastName);
//         $this->setFirstName($firstName);
//         $this->setMatricule($Matricule);
//         //$this->dateNaissance = $dateNaissance;
//         $this->set_Date($dateNaissance);
//     }
//     public function getLastName()
//     {
//         return $this->lastName;
//     }
//     public function setLastName($lastName)
//     {
//         if ((preg_match(('/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/'), $lastName) == 1) && strlen($lastName) <= 25) {
//             $this->lastName = $lastName;
//         } else {
//             throw new Exception("Invalid lastName");
//         }
//     }
//     public function getFirstName()
//     {
//         return $this->firstName;
//     }
//     public function setFirstName($firstName)
//     {
//         if ((preg_match(('/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/'), $firstName) == 1) && strlen($firstName) <= 25) {
//             $this->firstName = $firstName;
//         } else {
//             throw new Exception("Invalid firstName");
//         }
//     }
//     public function getMatricule()
//     {
//         return $this->Matricule;
//     }
//     public function setMatricule($Matricule)
//     {
//         if ((preg_match(('/^[a-zA-Z0-9ä-ÿÄ-Ÿ\s]*$/'), $Matricule) == 1) && strlen($Matricule) <= 10) {
//             $this->Matricule = $Matricule;
//         } else {
//             throw new Exception("Invalid Matricule");
//         }
//     }
//     public function getDate()
//     {
//         return $this->dateNaissance;
//     }
//     public function set_Date($dateNaissance)
//     {
//         if ((preg_match('/^[0-9]{4}-(0[1-9]|1
//         [0-2])-(0[1-9]|[12][0-9]|3[01])$/', $dateNaissance) == 1) && strlen($dateNaissance) <= 10) {
//             $this->dateNaissance = $dateNaissance;
//         } else {
//             throw new Exception("Invalid Date");
//         }
//     }
//     public function Presentation()
//     {
//         echo "Bonjour je m'appelle $this->lastName $this->firstName mon numéro matricule est le $this->Matricule ,je suis né le $this->dateNaissance  ";
//     }
//     public function FaireCourse()
//     {
//     }
//     public function Evaluation()
//     {
//     }
// }


// class Professeur extends Apprenants implements InterfaceFormateur
// {
//     public $salaire;
//     public $voiture;
//     public $specialite;
//     public function __construct($nom, $prenom, $Matricule, $dateEvaulation, $salaire, $voiture, $specialite)
//     {
//         parent::__construct($nom, $prenom, $Matricule, $dateEvaulation);
//         $this->salaire = $salaire;
//         $this->voiture = $voiture;
//         $this->specialite = $specialite;
//     }
//     public function Presentation()
//     {
//         if ($this->voiture == "oui") {
//             echo "Bonjour chèr(e)s amis je m'appelle $this->lastName $this->firstName, je suis Professeur de $this->specialite et je gagne $this->salaire par mois chaque matin je vais au boulot avec ma voiture";
//         } else {
//             echo "Bonjour chèr(e)s amis je m'appelle $this->lastName $this->firstName, je suis Professeur de $this->specialite et je gagne $this->salaire par mois chaque matin je vais au boulot à pied";
//         }
//     }
//     public function EvaluerEtudiant()
//     {
//     }
// }






// $Apprennant1 = new Apprenants("Ntandou", "Sacre", "M07Simplon", "1999-01-01");
// $Apprennant1->Presentation();
//var_dump($Apprennant1->getDate());













// $personn1 = new Apprenants("John", "Johnny");
// $personn1 = $personn1->jatFirstName();

//echo $personn1;
// class Etudiants
// {
//     public $nom;
//     public $prenom;
//     public $note;
//     public $ensembleEtudiants;
//     public function afficherEtudiants()
//     {
//         echo $this->nom . " " . $this->prenom;
//     }
//     public function  __construct($note, $ensembleEtudiants)
//     {
//         $this->note = $note;
//         $this->ensembleEtudiants = $ensembleEtudiants / $note;
//     }
// }


// class Exemple
// {
//     public $proprieteNonStatique = "Je suis une propriété non statique.";
//     public static $proprieteStatique = "Je suis une propriété statique.";

//     public function afficherProprietes()
//     {
//         echo "Propriété non statique : " . $this->proprieteNonStatique . "\n";
//         echo "Propriété statique : " . self::$proprieteStatique . "\n";
//     }
// }

// $instance1 = new Exemple();
// $instance2 = new Exemple();

// $instance1->proprieteNonStatique = "Modifiée par instance 1";
// $instance2->proprieteNonStatique = "Modifiée par instance 2";

// Exemple::$proprieteStatique = "Modifiée par la classe";

// $instance1->afficherProprietes();
// $instance2->afficherProprietes();


// class Voiture
// {
//     public $numeroSerie; // Élément non statique
//     public static $nombreTotalDeVoitures = 0; // Élément statique

//     public function __construct()
//     {
//         self::$nombreTotalDeVoitures++; // Incrémente le compteur de voitures à chaque nouvelle instance
//         $this->numeroSerie = self::$nombreTotalDeVoitures; // Chaque voiture a un numéro de série unique
//     }
// }

// $voiture1 = new Voiture();
// $voiture2 = new Voiture();
// $voiture3 = new Voiture();

// echo "Nombre total de voitures : " . Voiture::$nombreTotalDeVoitures . "\n";
// echo "Numéro de série de la voiture 1 : " . $voiture1->numeroSerie . "\n";
// echo "Numéro de série de la voiture 2 : " . $voiture2->numeroSerie . "\n";

//var_dump(preg_match('/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/', 'voiture 1'));
interface InterfaceApprennant
{
    public function Presentation();
    public function FaireCourse();
    public function Evaluation();
}

interface InterfaceFormateur
{
    public function EvaluerEtudiant();
}

class Apprenants implements InterfaceApprennant
{
    private $firstName;
    private $lastName;
    private $Matricule;
    public $dateNaissance;

    public function __construct($lastName, $firstName, $Matricule, $dateNaissance)
    {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setMatricule($Matricule);
        $this->set_Date($dateNaissance);
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        if ((preg_match(('/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/'), $lastName) == 1) && strlen($lastName) <= 25) {
            $this->lastName = $lastName;
        } else {
            throw new Exception("Invalid lastName");
        }
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        if ((preg_match(('/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/'), $firstName) == 1) && strlen($firstName) <= 25) {
            $this->firstName = $firstName;
        } else {
            throw new Exception("Invalid firstName");
        }
    }
    public function getMatricule()
    {
        return $this->Matricule;
    }
    public function setMatricule($Matricule)
    {
        if ((preg_match(('/^[a-zA-Z0-9ä-ÿÄ-Ÿ\s]*$/'), $Matricule) == 1) && strlen($Matricule) <= 10) {
            $this->Matricule = $Matricule;
        } else {
            throw new Exception("Invalid Matricule");
        }
    }
    public function getDate()
    {
        return $this->dateNaissance;
    }
    public function set_Date($dateNaissance)
    {
        if ((preg_match('/^[0-9]{4}-(0[1-9]|1
            [0-2])-(0[1-9]|[12][0-9]|3[01])$/', $dateNaissance) == 1) && strlen($dateNaissance) <= 10) {
            $this->dateNaissance = $dateNaissance;
        } else {
            throw new Exception("Invalid Date");
        }
    }

    public function Presentation()
    {
        echo "Bonjour je m'appelle $this->lastName $this->firstName mon numéro matricule est le $this->Matricule, je suis né le $this->dateNaissance. </br>";
    }

    public function FaireCourse()
    {
    }

    public function Evaluation()
    {
    }
}

class Professeur extends Apprenants implements InterfaceFormateur
{
    public $salaire;
    public $voiture;
    public $specialite;

    public function __construct($nom, $prenom, $Matricule, $dateNaissance, $salaire, $voiture, $specialite)
    {
        parent::__construct($nom, $prenom, $Matricule, $dateNaissance);
        $this->salaire = $salaire;
        $this->voiture = $voiture;
        $this->specialite = $specialite;
    }

    public function Presentation()
    {
        if ($this->voiture == "oui") {
            echo "Bonjour chèr(e)s amis, je m'appelle " . parent::getLastName() . " " . parent::getFirstName() . " Je suis Professeur de $this->specialite et je gagne $this->salaire par mois. Chaque matin, je vais au boulot avec ma voiture et mon matricule est le " . parent::getMatricule() . "</br>";
        } else {
            echo "Bonjour chèr(e)s amis, je m'appelle " . parent::getLastName() . " " . parent::getFirstName() . " Je suis Professeur de $this->specialite et je gagne $this->salaire par mois. Chaque matin, je vais au boulot à pied et mon matricule est le " . parent::getMatricule() . "</br>";
        }
    }

    public function EvaluerEtudiant()
    {
    }
}

$Apprennant1 = new Apprenants("Ntandou", "Sacre", "M07Simplon", "1999-01-01");
$Apprennant1->Presentation();

$Professeur1 = new Professeur("Ntandou", "Sacre", "M07Simplon", "1999-03-01", 300000, "oui", "full-stack");
$Professeur1->Presentation();
