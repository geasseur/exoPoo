<?php
class Bibliotheque{
  protected $_listeLivre;
  protected $_listeUtilisateur;

  public function __construct($listeLivre, $listeUtilisateur){
    $this->_listeLivre = $this->setListeLivre($listeLivre);
    $this->_listeUtilisateur = $this->setListeUtilisateur($listeUtilisateur);
  }

  public function listeLivre(){
    return $this->_listeLivre;
  }
  public function listeUtilisateur(){
    return $this->_listeUtilisateur;
  }

  public function setListeLivre($listeLivre){
    $this->_listeLivre = $listeLivre;
  }
  public function setListeUtilisateur($listeUtilisateur){
    $this->_listeUtilisateur = $listeUtilisateur;
  }
} ?>
