<?php

class ClioManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }

  public function setBdd($bdd){
    $this->_bdd = $bdd;
  }

  public function addClio(Clio $clio){
    $ajoutClio = $this->_bdd->prepare('INSERT INTO Clio(couleur, portes, prix) VALUES (:couleur, :portes, :prix)');
    $ajoutClio->bindValue(':couleur', $clio->couleur());
    $ajoutClio->bindValue(':portes', $clio->portes(), PDO::PARAM_INT);
    $ajoutClio->bindValue(':prix', $clio->prix(), PDO::PARAM_INT);
    $ajoutClio->execute();
  }

  public function afficheClio(){
    $afficheClio->execute('SELECT couleur, portes, prix from Clio');
  }

  public function deleteClio(Clio $clio){
    $this->_bdd->execute('DELETE FROM Clio WHERE id  = '.$perso->id());
  }
}

class Clio{
  private $_portes;
  private $_couleur;
  private $_prix = 1550;
  const TROIS_PORTES = 3;
  const CINQ_PORTES = 5;
  const BLEU = '#0b0dec';
  const ROUGE = '#ed0404';
  const VERT = '#04cb12';
  const NOIR = '#000000';
  const BLANC = '#ffffff';
  const VIOLET = '#a300be';
  const JAUNE = '#f0e008';
  const CYAN = '#22f2e6';

//constructeur
  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }
//hydratation
  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

//fonction d'affichages des voitures
  public function afficher(){

  }

  //getters
  public function prix(){
    return $this->_prix;
  }

  public function couleur(){
    return $this->_couleur;
  }

  public function portes(){
    return $this->_portes;
  }

  //setters
  public function setPortes($portes){
    if ($portes == 3) {
      $this->_portes = Clio::TROIS_PORTES;
    }
    else if ($portes == 5) {
      $this->_portes = Clio::CINQ_PORTES;
    }
    else {
      echo "la clio ne peut avoir que 3 ou 5 portes";
    }
  }

  public function setCouleur($couleur){
    switch($couleur){
      case 'bleu':
        $this->_couleur = Clio::BLEU;
        break;
      case 'rouge':
        $this->_couleur = Clio::ROUGE;
        break;
      case 'vert':
        $this->_couleur = Clio::VERT;
        break;
      case 'noir':
        $this->_couleur = Clio::NOIR;
        break;
      case 'blanc':
        $this->_couleur = Clio::BLANC;
        break;
      case 'violet':
        $this->_couleur = Clio::VIOLET;
        break;
      case 'jaune':
        $this->_couleur = Clio::JAUNE;
        break;
      case 'cyan':
        $this->_couleur = Clio::CYAN;
        break;
      default:
        echo "cette couleur n'est pas disponible";
    }
  }

  public function setPrix($prix){
    $this->_prix = $prix;
  }
}
 ?>
