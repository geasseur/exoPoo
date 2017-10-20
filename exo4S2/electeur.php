<?php

class Electeur extends Personne{
  protected $bureau_de_vote;
  protected $vote;

    public function __construct(array $donnees){
      $this->hydrate($donnees);
    }

    public function getBureauDeVote()
    {
        return $this->bureau_de_vote;
    }

    public function setBureauDeVote($bureau_de_vote)
    {
        $this->bureau_de_vote = $bureau_de_vote;

        return $this;
    }

    public function getVote()
    {
        return $this->vote;
    }


    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    public function aVote($vote){
      $this->setVote($vote);
      echo "monsieur ".$this->getNom(). $this->getVote(). "au bureau de vote situé à " . $this->getBureauDeVote(). ".";
    }

} ?>
