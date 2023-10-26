<?php
class Evaluations
{
    private $nom;
    private $infoProfesseur;
    private $dateEvaluations;
    private $durer;

    public function __construct($nom, $infoProfesseur, $dateEvaluations, $durer)
    {
        $this->setNom($nom);
        $this->setInfoProfesseur($infoProfesseur);
        $this->dateEvaluations = $dateEvaluations;
        $this->durer = $durer;
    }

    public function programmerEvaluation()
    {
        echo "Vous avez une évaluation sur {$this->nom} avec le professeur {$this->infoProfesseur} le {$this->dateEvaluations} pour une durée de {$this->durer}.";
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        if (is_string($nom)) {
            $this->nom = $nom;
        } else {
            throw new Exception("Le nom doit être une chaîne de caractères.");
        }
    }

    public function getInfoProfesseur()
    {
        return $this->infoProfesseur;
    }

    public function setInfoProfesseur($infoProfesseur)
    {
        if (is_string($infoProfesseur)) {
            $this->infoProfesseur = $infoProfesseur;
        } else {
            throw new Exception("Les informations du professeur doivent être une chaîne de caractères.");
        }
    }
    
    public function getDateEvaluations()
    {
        return $this->dateEvaluations;
    }

    public function setDateEvaluations($dateEvaluations)
    {
        $this->dateEvaluations = $dateEvaluations;
    }

    public function getDurer()
    {
        return $this->durer;
    }

    public function setDurer($durer)
    {
        $this->durer = $durer;
    }
}

$evaluations = new Evaluations("Maintenance", "Matar Ba", "2023/12/10", "2h");
$evaluations->programmerEvaluation();
