<?php
class Trajet {
   
  private $id;
  private $depart;
  private $arrivee;
  private $date;
  private $nbplaces;
  private $prix;
  private $conducteur_login;
   
  // un constructeur
  public function __construct($data)  {
    $this->data = $data;
  } 

  public function get($nom_attribut)  {
    return $this->$nom_attribut;
  }

  public function set($nom_attribut, $valeur)  {
      $this->$nom_attribut = $valeur;
  }

}
?>

