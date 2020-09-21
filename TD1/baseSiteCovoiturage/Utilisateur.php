<?php
class Utilisateur {
   
  private $login;
  private $nom;
  private $prenom;
   
  // un constructeur
  public function __construct($login, $nom, $prenom)  {
    $this->login = $login;
    $this->nom = $nom;
    $this->prenom = $prenom;
  } 

  public function getLogin()  {
    return $this->login;
  }
  public function getNom()  {
    return $this->nom;
  }
  public function getPrenom()  {
    return $this->prenom;
  }

  public function setLogin($login2)  {
      $this->login = $login2;
  }
  public function setNom($nom2)  {
      $this->nom = $nom2;
  }
  public function setPrenom($prenom2)  {
      $this->prenom = $prenom2;
  }

}
?>

