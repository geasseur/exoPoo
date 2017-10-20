<?php
class Personnage{
  protected $_id;
  protected $_degats;
  protected $_nom;
  const CEST_MOI = 1;
  const PERSONNAGE_TUE = 2;
  const PERSONNAGE_FRAPPE = 3;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

  public function frapper(Personnage $perso){
    if ($perso->getId() == $this->_id) {
      return self::CEST_MOI;
    }
  }

  public function recevoirDegat(){
    $this->_degats +=5;
    if ($this->_degats >= 100) {
      return self::PERSONNAGE_TUE;
    }
    return self::PERSONNAGE_FRAPPE;
  }


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed _id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    /**
     * Get the value of Degats
     *
     * @return mixed
     */
    public function getDegats()
    {
        return $this->_degats;
    }

    /**
     * Set the value of Degats
     *
     * @param mixed _degats
     *
     * @return self
     */
    public function setDegats($degats)
    {
      $degats = (int) $degats;
      if ($degats >= 0 and $degats <= 100) {
        $this->_degats = $degats;
      }

        return $this;
    }

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed _nom
     *
     * @return self
     */
    public function setNom($nom)
    {
      if (is_string($nom)){
        $this->_nom = $nom;

        return $this;
    }

    }
  }
?>
