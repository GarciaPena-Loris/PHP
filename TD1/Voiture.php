<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
    return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
    $this->marque = $marque2;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   if (strlen($i) > 8) {
      echo "Immatriculation non valide (taille > 8)\n";
    }
    else {
      $this->immatriculation = $i;
    }
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur)";
  }

  //getter de couleur et immatriculation
  public function getImmatriculation()  {
    return $this->immatriculation;
  }

  public function getcouleur()  {
    return $this->couleur;
  }

  //setter de couleur et immatriculation
  public function setImmatriculation($imma2)  {
    if (strlen($imma2) > 8) {
      echo "Immatriculation non valide (taille > 8)\n";
    }
    else {
      $this->immatriculation = $imma2;
    }
  }

  public function setCouleur($couleur2)  {
      $this->couleur = $couleur2;
  }

}
?>

