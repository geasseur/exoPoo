<?php

class Ville{
  private $_nom;
  private $_departement;

  public function __construct($nom, $departement){
    $this->setNom($nom);
    $this->setDepartement($departement);
  }

  public function setNom($nom){
    if (!is_string($nom)) {
      trigger_error('ça doit être un nom',E_USER_WARNING);
      return;
    }
    return $this->_nom = $nom;
  }
  public function setDepartement($departement){
    if (!is_string($departement)) {
      trigger_error('ça doit être un nom',E_USER_WARNING);
      return;
    }
    return $this->_departement = $departement;
  }

  public function afficherVille(){
    echo 'la ville se nomme ',$this->_nom,' et se trouve dans le ',$this->_departement;
  }

  
} ?>
