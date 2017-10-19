<?php
class PersonnageManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBDD($bdd);
  }

  /**
   * Get the value of Bdd
   *
   * @return mixed
   */
  public function getBdd()
  {
      return $this->_bdd;
  }

  /**
   * Set the value of Bdd
   *
   * @param mixed _bdd
   *
   * @return self
   */
  public function setBdd($bdd)
  {
      $this->_bdd = $bdd;

      return $this;
  }

  public function add(Personnage $perso)
  {
    $q = $this->_bdd->prepare('INSERT INTO personnages(nom, forcePerso, degats, niveau, experience) VALUES(:nom, :forcePerso, :degats, :niveau, :experience)');

    $q->bindValue(':nom', $perso->setNom());
    $q->bindValue(':forcePerso', $perso->setForcePerso(), PDO::PARAM_INT);
    $q->bindValue(':degats', $perso->setDegats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $perso->setNiveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $perso->setExperience(), PDO::PARAM_INT);

    $q->execute();
  }

  public function delete(Personnage $perso)
  {
      $this->_bdd->execute('DELETE FROM Personnages WHERE id ='.$perso->id());
  }

  public function get($id){
    $id = int $id;
    $q = $this->_bdd->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM Personnages WHERE id ='.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    return new Personnages($donnees);
  }

  public function getList(){
    $persos = [];
    $q = $this->_bdd->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM Personnages ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
      $persos[]= new Personnage($donnees);
    }
    return $persos;
  }

  public function update(Personnage $perso)
  {
    $q = $this->_bdd->prepare('UPDATE personnages SET forcePerso = :forcePerso, degats = :degats, niveau = :niveau, experience = :experience WHERE id = :id');

    $q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
    $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);

    $q->execute();
  }

  public function setDb(PDO $bdd)
  {
    $this->_bdd = $db;
  }
}

////////////////////////////////////////////////////////////////////////////
/////////////////////////////////PERSONNAGE///////////////////////////////////
////////////////////////////////////////////////////////////////////////////

class Personnage{
  protected $_id;
  protected $_nom;
  protected $_forcePerso;
  protected $_degats;
  protected $_niveau;
  protected $_experience;

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

  public function __construct(array $donnees){
    $this->hydrate($donnees);
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
      $id = int $id;
      if ($id >= 0)
      {
        $this->_id = $id;
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
      if (is_string($nom))
      {
        $this->_nom = $nom;
      }
      return $this;
    }

    /**
     * Get the value of Force Perso
     *
     * @return mixed
     */
    public function getForcePerso()
    {
        return $this->_forcePerso;
    }

    /**
     * Set the value of Force Perso
     *
     * @param mixed _forcePerso
     *
     * @return self
     */
    public function setForcePerso($forcePerso)
    {
      $forcePerso = int $forcePerso;
      if ($forcePerso >= 0 and $forcePerso <= 100)
      {
        $this->_forcePerso = $forcePerso;
      }
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
      $degats = int $degats;
      if ($degats >= 0 and $degats <= 100)
      {
        $this->_degats = $degats;
      }
      return $this;
    }

    /**
     * Get the value of Niveau
     *
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->_niveau;
    }

    /**
     * Set the value of Niveau
     *
     * @param mixed _niveau
     *
     * @return self
     */
    public function setNiveau($niveau)
    {
      $niveau = int $niveau;
      if ($niveau >= 0 and $niveau <= 100)
      {
        $this->_niveau = $niveau;
      }
      return $this;
    }

    /**
     * Get the value of Experience
     *
     * @return mixed
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * Set the value of Experience
     *
     * @param mixed _experience
     *
     * @return self
     */
    public function setExperience($experience)
    {
      $experience = int $experience;
      if ($experience >= 0)
      {
        $this->_experience = $experience;
      }
      return $this;
    }

    // On admet que $db est un objet PDO.
    // $request = $db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');
    //
    // while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
    // {
    //   // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
    //   // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
    //   $perso = new Personnage($donnees);
    //
    //   echo $perso->nom(), ' a ', $perso->forcePerso(), ' de force, ', $perso->degats(), ' de dégâts, ', $perso->experience(), ' d\'expérience et est au niveau ', $perso->niveau();
}
  ?>
