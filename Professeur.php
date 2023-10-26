<?php
require("Etudiant.php");

interface prof {
    public function professeur();
}

class Professeur extends Etudiants implements prof {
    private $voiture;
    private $salaire;
    private $specialiter;
    public $dateEvaluation;

    function __construct($prenomParam, $nomParam, $voiture, $salaire, $specialiter, $matriculeParam, $dateNaissanceParam) {
        parent::__construct($prenomParam, $nomParam, $matriculeParam, $dateNaissanceParam);
        $this->setVoiture($voiture);
        $this->setSalaire($salaire);
        $this->setSpecialiter($specialiter);
    }

    public function presenter() {
        echo "Salut je suis {$this->getPrenom()} {$this->getNom()} professeur à l'université de Dakar, j'ai une {$this->voiture}, mon matricule {$this->getMatricule()} je suis dans le domaine {$this->getSpecialiter()} j'ai un salaire de {$this->getSalaire()} <br>";
    }

    function getSpecialiter() {
        return $this->specialiter;
    }

    function setSpecialiter($specialiter) {
        return $this->specialiter = $specialiter;
    }

    function setSalaire($salaire) {
        return $this->salaire = $salaire;
    }

    function getSalaire() {
        return $this->salaire;
    }

    function setVoiture($voiture) {
        return $this->voiture = $voiture;
    }

    function getVoiture() {
        return $this->voiture;
    }

    public function EvaluationEtudiant($dateEvaluation) {
        echo "J'ai programmé une évaluation le $dateEvaluation. <br>";
    }

    public function professeur() {
        echo "Je suis un professeur. <br>";
    }
}

$professeur = new Professeur("Robert", "Call", "Mercedes", "300000 FR", "Développement", "CA12", "1996/10/20");
$professeur->presenter();
$professeur->EvaluationEtudiant("2023/10/04");
$professeur->professeur();
