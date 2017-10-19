<?php
class Utilisateur
{

  protected $_id;
  protected $_nom;
  protected $_livreEmprunter;

  public function __construct(array $donnees)
  {
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

  public function emprunterLivre(Livre $livre, Utilisateur $moi){
    echo "le livre de ".$livre->auteur()." a été emprunté par ".$moi->nom();
  }
} ?>
