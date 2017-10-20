<?php
class PersonnageManager{
  protected $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
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

    public function add(Personnage $perso){
      $q = $this->_bdd->prepare('INSERT INTO persoJeuCombat(nom) VALUES(:nom)');
      $q->bindValue(':nom', $perso->getNom());
      $q->execute();

      $perso->hydrate([
        'id' => $this->_bdd->lastInsertId(),
        'degats' => 0
      ]);
    }

    public function count(){
      return $this->_bdd->query('SELECT COUNT(*) FROM persoJeuCombat')->fetchColumn();
    }

    public function delete(Personnage $perso){
      $this->_bdd->exec('DELETE FROM persoJeuCombat WHERE id = '.$perso->id());
    }

    public function update(Personnage $perso){
      $q = $this->_bdd->prepare('UPDATE persoJeuCombat SET degats = :degats WHERE id = :id');

      $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
      $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);

      $q->execute();
    }

    public function exists($infos){
      if (is_int($info)){ // On veut voir si tel personnage ayant pour id $info existe.

        return (bool) $this->_db->query('SELECT COUNT(*) FROM persoJeuCombat WHERE id = '.$info)->fetchColumn();
      }
    // Sinon, c'est qu'on veut vérifier que le nom existe ou pas.

      $q = $this->_bdd->prepare('SELECT COUNT(*) FROM persoJeuCombat WHERE nom = :nom');
      $q->execute([':nom' => $info]);

      return (bool) $q->fetchColumn();
    }

    public function get($infos){
      if (is_int($info)){
        $q = $this->_bdd->query('SELECT id, nom, degats FROM persoJeuCombat WHERE id = '.$info);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Personnage($donnees);
      }
      else
      {
        $q = $this->_bdd->prepare('SELECT id, nom, degats FROM persoJeuCombat WHERE nom = :nom');
        $q->execute([':nom' => $info]);

        return new Personnage($q->fetch(PDO::FETCH_ASSOC));
      }
    }

    public function getList($nom){
      $persos = [];

       $q = $this->_bdd->prepare('SELECT id, nom, degats FROM persoJeuCombat WHERE nom <> :nom ORDER BY nom');
       $q->execute([':nom' => $nom]);

       while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
       {
         $persos[] = new Personnage($donnees);
       }

       return $persos;
    }

} ?>
