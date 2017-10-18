<?php
class Livre{
  protected $_id;
  protected $_nbpages;
  protected $_libre;
  protected $_auteur;

  public function __construct($id, $nbpages, $libre, $auteur){
    $this->_id = $this->setId($id);
    $this->_nbpages = $this->setNbpages($nbpages);
    $this->_libre = $this->setLibre($libre);
    $this->_auteur = $this->setAuteur($auteur);
  }

  public function id(){
    return $this->_id;
  }

  public function nbpages(){
    return $this->_nbpages;
  }

  public function libre(){
    return $this->_libre;
  }

  public function auteur(){
    return $this->_auteur;
  }

  public function setId($id){
    $this->_id = $id;
    return $this->_id;
  }

  public function setNbpages($nbpages){
    $this->_nbpages = $nbpages;
    return $this->_nbpages;
  }

  public function setLibre($libre){
    $this->_libre = $libre;
    return $this->_libre;
  }

  public function setAuteur($auteur){
    $this->_auteur = $auteur;
    return $this->_auteur;
  }

}
 ?>
