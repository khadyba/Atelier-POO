<?php
class Etudiants {
    private $nom;
    private $prenom;
    private $matricule;
    public $dateNaissance;

    public function __construct($prenomParam, $nomParam, $matriculeParam, $dateNaissanceParam) {
        $this->setNom($nomParam);
        $this->setPrenom($prenomParam);
        $this->setMatricule($matriculeParam);
        $this->dateNaissance = $dateNaissanceParam;
    }

    public function presenter() {
        echo "Je m'appelle {$this->prenom} {$this->nom}, étudiant à l'université de New York, né le {$this->dateNaissance} à Dakar, matricule {$this->matricule}.<br>";
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        if (is_string($nom) && strlen($nom) <= 25) {
            $this->nom = $nom;
        } else {
            throw new Exception("Le nom n'est pas valide !");
        }
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        if (is_string($prenom) && strlen($prenom) <= 25) {
            $this->prenom = $prenom;
        } else {
            throw new Exception("Le prénom n'est pas valide !");
        }
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function faireCours() {
        echo "Je fait un cours sur la programmation orientée objet.<br>";
    }

    public function faireEvaluation() {
        echo "J'ai une évaluation sur comment structurer son code.<br>";
    }
}

 $etudiant1 = new Etudiants("Khady", "Ba", "PN1500", "2020/10/02");
$etudiant1->presenter();
$etudiant1->faireCours();
$etudiant1->faireEvaluation();
$etudiant1->setNom("Diallo");
$etudiant1->presenter();
