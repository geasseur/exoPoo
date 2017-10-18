<?php
class Utilisateur
{

  protected $_id;
  protected $_nom;
  protected $_livreEmprunter;

  public function __construct($id, $nom, $livreEmprunter)
  {
    $this->setId($id);
    $this->setNom($nom);
    $this->setLivreEmprunter($livreEmprunter);
  }

  public function id(){
    return $this->_id;
  }
  public function nom(){
    return $this->_nom;
  }
  public function livreEmprunter(){
    return $this->_livreEmprunter;
  }

  public function setId($id){
    $this->_id = $id;
    return $this->_id;
  }
  public function setNom($nom){
    $this->_nom = $nom;
    return $this->_id;
  }
  public function setLivreEmprunter($livreEmprunter){
    $this->_livreEmprunter = $livreEmprunter;
    return $this->_livreEmprunter;
  }

  public function emprunterLivre(Livre $livre){
    echo "le livre de ".$livre->auteur()." a été emprunté";
  }
} ?>
