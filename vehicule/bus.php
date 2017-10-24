<?php
class Bus extends Vehicule{
  protected $nbEtage;


    public function getNbEtage()
    {
        return $this->nbEtage;
    }


    public function setNbEtage($nbEtage)
    {
        $this->nbEtage = $nbEtage;

        return $this;
    }

} ?>
