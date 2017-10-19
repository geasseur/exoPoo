<?php
class Livre{
  protected $_id;
  protected $_nbpages;
  protected $_libre;
  protected $_auteur;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);

      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
        // On appelle le setter.
        $this->$method($value);
      }
    }
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
