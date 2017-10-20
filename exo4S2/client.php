<?php
class Client extends Personne{
  protected $adresse;

    public function __construct(array $donnees){
      $this->hydrate($donnees);
    }


    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCord(){
      $coordonne = "l'adresse est " .$this->getAdresse(). ". Le propriétaire est ".$this->getNom(). " " .$this->getPrenom();
      echo $coordonne;
    }

} ?>
