<?php
class Voiture extends Vehicule{
  protected $nbPortes;

    public function getNbPortes()
    {
        return $this->nbPortes;
    }


    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }



} ?>
