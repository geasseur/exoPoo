<?php

class ChatManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }

  public function setBdd($bdd){
    $this->_bdd = $bdd;
  }

  public function addChat(Chat $chat){
    $ajoutChat = $this->_bdd->prepare('INSERT INTO Chat(nom, age, sexe, pelage) VALUES (:nom, :age, :sexe, :pelage)');
    $ajoutChat->bindValue(':nom', $chat->nom());
    $ajoutChat->bindValue(':age', $chat->age(), PDO::PARAM_INT);
    $ajoutChat->bindValue(':sexe', $chat->sexe(), PDO::PARAM_INT);
    $ajoutChat->bindValue(':pelage', $chat->pelage(), PDO::PARAM_INT);
    $ajoutChat->execute();
  }

  public function afficheChat(){
    $afficheChat= $this->_bdd->query('SELECT nom, age, sexe, pelage from Chat');

    return $afficheChat->fetchAll();
  }
}

class Chat{
  private $_nom;
  private $_age;
  private $_sexe;
  private $_pelage;
  const MALE = 1;
  const FEMELLE = 0;
  const BRUN = '#964400';
  const NOIR = '#000000';
  const BLANC = '#ffffff';
  const GRIS = '#909090';

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  //getter
  public function nom(){
    return $this->_nom;
  }
  public function age(){
    return $this->_age;
  }
  public function sexe(){
    return $this->_sexe;
  }
  public function pelage(){
    return $this->_pelage;
  }

  //setter
  public function setNom($nom){
    $longueur =strlen($nom);
    if ($longueur < 15) {
      $this->_nom = $nom;
    }
  }
  public function setAge($age){
    if ($age > 0 and $age < 30) {
      $this->_age = $age;
    }
  }

  public function setSexe($sexe){
    if ($sexe == 'male') {
      $this->_sexe = Self::MALE;
    }
    else if ($sexe == 'femelle') {
      $this->_sexe = Self::FEMELLE;
    }
    else {
      echo "je n'ai pas compris choisissez entre male et femelle";
    }
  }

  public function setPelage($pelage){
    if ($pelage == 'brun') {
      $this->_pelage = Chat::NOIR;
    }
    else if ($pelage == 'noir') {
      $this->_pelage = Chat::NOIR;
    }
    else if ($pelage == 'blanc') {
      $this->_pelage = Chat::BLANC;
    }
    else if ($pelage == 'gris') {
      $this->_pelage = Chat::GRIS;
    }
    else {
      echo "ce couleur n'est pas disponible";
    }
  }
}
 ?>
