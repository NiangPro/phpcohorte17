<?php 


class Personne{
   public $prenom = "";
   public $nom = "";
   public $sexe = "";
   private $age;

   public function __construct($prenom, $nom, $sexe)
   {
    
       $this->prenom = $prenom;
       $this->nom = $nom;
       $this->sexe = $sexe;
   }

   public function afficher(){
    echo " Prenom:".$this->prenom."<br>";
    echo " Nom:".$this->nom."<br>";
    echo " Sexe:".$this->sexe."<br>";
   }

}

class Etudiant extends Personne{
    public $matricule;

    public function __construct($prenom, $nom, $sexe, $matricule)
    {
        // parent::__construct($prenom, $nom, $sexe);
         $this->prenom = $prenom;
       $this->nom = $nom;
       $this->sexe = $sexe;
        $this->matricule = $matricule;

    }


    function afficher()
    {
        parent::afficher();
        echo "Matricule: ".$this->matricule;
    }
}

$etudiant1 = new Personne("Moussa", "Niang", "Masculin");

$etudiant2 = new Personne("Penda", "Diop", "Feminin");

// echo " Prenom:".$etudiant1->prenom."<br>";
// echo " Nom:".$etudiant1->nom."<br>";
// echo " Sexe:".$etudiant1->sexe."<br>";

$etudiant1->afficher();
$etudiant2->afficher();

$et = new Etudiant("Ousseynou", "Diop", "Masculin", "ET0001");

$et->afficher();