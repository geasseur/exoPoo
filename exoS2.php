<?php
//
// class ClioManager{
//   private $_bdd;
//
//   public function __construct($bdd){
//     $this->setBdd($bdd);
//   }
//
//   public function setBdd($bdd){
//     $this->_bdd = $bdd;
//   }
//
//   public function addClio(Clio $clio){
//     $ajoutClio = $this->_bdd->prepare('INSERT INTO Clio(couleur, portes, prix) VALUES (:couleur, :portes, :prix)');
//     $ajoutClio->bindValue(':couleur', $clio->couleur());
//     $ajoutClio->bindValue(':portes', $clio->portes(), PDO::PARAM_INT);
//     $ajoutClio->bindValue(':prix', $clio->prix(), PDO::PARAM_INT);
//     $ajoutClio->execute();
//   }
//
//   public function afficheClio(){
//     $afficheClio->execute('SELECT couleur, portes, prix from Clio');
//   }
//
//   public function deleteClio(Clio $clio){
//     $this->_bdd->execute('DELETE FROM Clio WHERE id  = '.$perso->id());
//   }
// }
//
// class Clio{
//   private $_portes;
//   private $_couleur;
//   private $_prix = 1550;
//   const TROIS_PORTES = 3;
//   const CINQ_PORTES = 5;
//   const BLEU = '#0b0dec';
//   const ROUGE = '#ed0404';
//   const VERT = '#04cb12';
//   const NOIR = '#000000';
//   const BLANC = '#ffffff';
//   const VIOLET = '#a300be';
//   const JAUNE = '#f0e008';
//   const CYAN = '#22f2e6';
//
// //constructeur
//   public function __construct(array $donnees){
//     $this->hydrate($donnees);
//   }
// //hydratation
//   public function hydrate(array $donnees){
//     foreach ($donnees as $key => $value){
//       $method = 'set'.ucfirst($key);
//       if (method_exists($this, $method)){
//         $this->$method($value);
//       }
//     }
//   }
//
// //fonction d'affichages des voitures
//   public function afficher(){
//
//   }
//
//   //getters
//   public function prix(){
//     return $this->_prix;
//   }
//
//   public function couleur(){
//     return $this->_couleur;
//   }
//
//   public function portes(){
//     return $this->_portes;
//   }
//
//   //setters
//   public function setPortes($portes){
//     if ($portes == 3) {
//       $this->_portes = Clio::TROIS_PORTES;
//     }
//     else if ($portes == 5) {
//       $this->_portes = Clio::CINQ_PORTES;
//     }
//     else {
//       echo "la clio ne peut avoir que 3 ou 5 portes";
//     }
//   }
//
//   public function setCouleur($couleur){
//     switch($couleur){
//       case 'bleu':
//         $this->_couleur = Clio::BLEU;
//         break;
//       case 'rouge':
//         $this->_couleur = Clio::ROUGE;
//         break;
//       case 'vert':
//         $this->_couleur = Clio::VERT;
//         break;
//       case 'noir':
//         $this->_couleur = Clio::NOIR;
//         break;
//       case 'blanc':
//         $this->_couleur = Clio::BLANC;
//         break;
//       case 'violet':
//         $this->_couleur = Clio::VIOLET;
//         break;
//       case 'jaune':
//         $this->_couleur = Clio::JAUNE;
//         break;
//       case 'cyan':
//         $this->_couleur = Clio::CYAN;
//         break;
//       default:
//         echo "cette couleur n'est pas disponible";
//     }
//   }
//
//   public function setPrix($prix){
//     $this->_prix = $prix;
//   }
// }
//
// $clio = new Clio([
//   'couleur' => 'bleu',
//   'portes' => 5
// ]);
// var_dump($clio);
// $bdd = new PDO('mysql:host=localhost;dbname=exoPoo', 'root', 'root');
// $manager = new ClioManager($bdd);
// $manager->addClio($clio);

//////////////////////////////////////////////////////////////////////
///////////////////////////////EXO 2///////////////////////////////////////
//////////////////////////////////////////////////////////////////////

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
