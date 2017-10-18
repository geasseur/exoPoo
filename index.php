<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>exo poo php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <?php
//TP mini jeu combat
      // class Personnage{
      //   private $_id;
      //   private $_nom;
      //   private $_degats;
      //
      //   const MOI = 1;
      //   const PERSONNAGE_MORT = 2;
      //   const PERSONNAGE_FRAPPE = 3;
      //
      //   public function __construct(array $donnees){
      //     $this->hydrate($donnees);
      //   }
      //
      //   public function hydrate(array $donnees){
      //     foreach ($donnees as $key => $value)
      //     {
      //       $method = 'set'.ucfirst($key);
      //
      //       if (method_exists($this, $method))
      //       {
      //         $this->$method($value);
      //       }
      //     }
      //   }
      //
      //   public function id(){
      //     return $this->_id;
      //   }
      //
      //   public function degats(){
      //     return $this->_degats;
      //   }
      //
      //   public function nom(){
      //     return $this->_nom;
      //   }
      //
      //   public function setId($id){
      //     $id = (int) $id;
      //     if ($id>0) {
      //       $this->_id = $id;
      //     }
      //   }
      //
      //   public function setDegats($degats){
      //     $degats = (int) $degats;
      //     if ($degats >= 0 and $degats <= 100) {
      //       $this->_degats = $degats;
      //     }
      //   }
      //
      //   public function setNom($nom){
      //     if (is_string($nom)) {
      //       $this->_nom = $nom;
      //     }
      //   }
      //   //fonction pour cibler un personnage à attaquer et lui indiquer qu'il a été frappé
      //   public function frapper(Personnage $perso){
      //     if ($perso->id() = $this->_id) {
      //       return self::MOI;
      //     }
      //     return $perso->recevoirDegat();
      //   }
      //
      //   //fonction donnant les points de degats au perso frappé
      //   public function recevoirDegat(){
      //     $this->_degats += 5;
      //     if ($this->_degats >= 100) {
      //       return self::PERSONNAGE_MORT;
      //     }
      //     return self::PERSONNAGE_FRAPPE;
      //   }
      // }
      //
      // class PersonnageManager{
      //   private $_bdd;
      //
      //   public function __construct($bdd){
      //     $this->setBdd($bdd);
      //   }
      //
      //   public function setDb(PDO $db){
      //     $this->_db = $db;
      //   }
      //
      //   public function add(Personnage $perso){
      //     $add = $this->prepare('SELECT id, nom, degats FROM PersonnagesTP');
      //     $add->bindValue(':nom'->$perso->nom());
      //     $add->execute();
      //     // Préparation de la requête d'insertion.
      //     // Assignation des valeurs pour le nom du personnage.
      //     // Exécution de la requête.
      //
      //     // Hydratation du personnage passé en paramètre avec assignation de son identifiant et des dégâts initiaux (= 0).
      //   }
      //
      //   public function count()
      //   {
      //     // Exécute une requête COUNT() et retourne le nombre de résultats retourné.
      //   }
      //
      //   public function delete(Personnage $perso)
      //   {
      //     // Exécute une requête de type DELETE.
      //   }
      //
      //   public function exists($info)
      //   {
      //     // Si le paramètre est un entier, c'est qu'on a fourni un identifiant.
      //       // On exécute alors une requête COUNT() avec une clause WHERE, et on retourne un boolean.
      //
      //     // Sinon c'est qu'on a passé un nom.
      //     // Exécution d'une requête COUNT() avec une clause WHERE, et retourne un boolean.
      //   }
      //
      //   public function get($info)
      //   {
      //     // Si le paramètre est un entier, on veut récupérer le personnage avec son identifiant.
      //       // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
      //
      //     // Sinon, on veut récupérer le personnage avec son nom.
      //     // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
      //   }
      //
      //   public function getList($nom)
      //   {
      //     // Retourne la liste des personnages dont le nom n'est pas $nom.
      //     // Le résultat sera un tableau d'instances de Personnage.
      //   }
      //
      //   public function update(Personnage $perso)
      //   {
      //     // Prépare une requête de type UPDATE.
      //     // Assignation des valeurs à la requête.
      //     // Exécution de la requête.
      //   }
      // }


      //cours

// class PersonnageManager{
//   private $_bdd;
//
//   //récupère la base de donnee
//   public function __construct($bdd){
//     $this->setBdd($bdd);
//   }
//
//   //remplit la propriété de l'objet pour constructeur
//   public function setBdd($bdd){
//     $this->_bdd = $bdd;
//   }
//   //ajoute un perso
//   public function addPerso(Personnage $perso){
//     $ajoutPerso = $this->_bdd->prepare('INSERT INTO Personnages(nom, forcePerso, degats, niveau, experience) values (:nom, :force, :degats, :niveau, :experience)');
//     $ajoutPerso->bindValue(':nom', $perso->nom());
//     $ajoutPerso->bindValue(':force', $perso->force(), PDO::PARAM_INT);
//     $ajoutPerso->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
//     $ajoutPerso->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
//     $ajoutPerso->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
//
//     $ajoutPerso->execute();
//
//   }
//   //supprime un perso
//   public function deletePerso(Personnage $perso){
//     $this->_bdd->execute('DELETE FROM Personnages WHERE id = '.$perso->id());
//   }
//   //recupere un perso
//   public function getPerso($id){
//     $id = (int)$id;
//     $perso = $this->_bdd->execute('SELECT * FROM Personnages WHERE id = '.$perso->id());
//     $donnees = $perso->fetch(PDO::FETCH_ASSOC);
//
//     return new Personnage($donnees);
//   }
//
//   //met a jour un perso
//   public function updatePerso(Personnage $perso){
//     $updatePerso = $this->_db->prepare('UPDATE personnages SET forcePerso = :forcePerso, degats = :degats, niveau = :niveau, experience = :experience WHERE id = :id');
//
//     $updatePerso->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
//     $updatePerso->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
//     $updatePerso->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
//     $updatePerso->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
//     $updatePerso->bindValue(':id', $perso->id(), PDO::PARAM_INT);
//
//     $updatePerso->execute();
//   }
//   //recupere la liste de tout les perso
//   public function getListPerso(){
//     $persos = [];
//
//     $listPerso = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages ORDER BY nom');
//
//     while ($donnees = $listPerso->fetch(PDO::FETCH_ASSOC))
//     {
//       $persos[] = new Personnage($donnees);
//     }
//
//     return $persos;
//   }
// }
//
//
// //////////////////////PERSONNAGE///////
//
//
// class Personnage{
//   private $_id;
//   private $_nom;
//   private $_force;
//   private $_degats;
//   private $_niveau;
//   private $_experience;
//
//   public function __construct(array $donnees){
//     $this->hydrate($donnees);
//   }
//
//   // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
//   public function hydrate(array $donnees){
//   foreach ($donnees as $key => $value)
//   {
//     $method = 'set'.ucfirst($key);
//
//     if (method_exists($this, $method))
//     {
//       var_dump($method);
//       $this->$method($value);
//     }
//   }
// }
//
//   public function id() { return $this->_id; }
//   public function nom() { return $this->_nom; }
//   public function force() { return $this->_force; }
//   public function degats() { return $this->_degats; }
//   public function niveau() { return $this->_niveau; }
//   public function experience() { return $this->_experience; }
//
//   public function setId($id)
//   {
//     // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
//     $this->_id = (int) $id;
//   }
//
//   public function setNom($nom)
//   {
//     // On vérifie qu'il s'agit bien d'une chaîne de caractères.
//     // Dont la longueur est inférieure à 30 caractères.
//     if (is_string($nom) && strlen($nom) <= 30)
//     {
//       $this->_nom = $nom;
//     }
//   }
//
//   public function setForce($force)
//   {
//     $force = (int) $force;
//
//     // On vérifie que la force passée est comprise entre 0 et 100.
//     if ($force >= 0 && $force <= 100)
//     {
//       $this->_force = $force;
//     }
//   }
//
//   public function setDegats($degats)
//   {
//     $degats = (int) $degats;
//
//     // On vérifie que les dégâts passés sont compris entre 0 et 100.
//     if ($degats >= 0 && $degats <= 100)
//     {
//       $this->_degats = $degats;
//     }
//   }
//
//   public function setNiveau($niveau)
//   {
//     $niveau = (int) $niveau;
//
//     // On vérifie que le niveau n'est pas négatif.
//     if ($niveau >= 0)
//     {
//       $this->_niveau = $niveau;
//     }
//   }
//
//   public function setExperience($exp)
//   {
//     $exp = (int) $exp;
//
//     // On vérifie que l'expérience est comprise entre 0 et 100.
//     if ($exp >= 0 && $exp <= 100)
//     {
//       $this->_experience = $exp;
//     }
//   }
// }
//
// $perso = new Personnage([
//   'nom' => 'theo',
//   'force' => 12,
//   'degats' => 3,
//   'niveau' => 2,
//   'experience' => 5
// ]);
//
// var_dump($perso);
// $bdd = new PDO('mysql:host=localhost;dbname=exoPoo', 'root', 'root');
// $manager = new PersonnageManager($bdd);
// //$manager->addPerso($perso);
// var_dump($manager);

// ORIENTE OBJET EXERCICE 1 et 2
// function chargerClasse($classe)
// {
//   require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
// }
//         spl_autoload_register('chargerClasse');
//         $Ville = new Ville('bruxelle','Belgique');
//         $Ville->afficherVille();



// ORIENTE OBJET EXERCICE 3
// class Personne{
//   private $_nom;
//   private $_prenom;
//   private $_adresse;
//
//   public function __construct(array $donnees){
//       $this->hydrate($donnees);
//     }
//
//   public function hydrate(array $donnees){
//     foreach ($donnees as $key => $value)
//     {
//       $method = 'set'.ucfirst($key);
//
//       if (method_exists($this, $method))
//       {
//         $this->$method($value);
//       }
//     }
//   }
//
//   public function setNom($nom){
//     $this->_nom = $nom;
//   }
//
//   public function setPrenom($prenom){
//     $this->_prenom = $prenom;
//   }
//
//   public function setAdresse($adresse){
//     $this->_adresse = $adresse;
//   }
//
//   public function nom(){
//     return $this->_nom;
//   }
//
//   public function prenom(){
//     return $this->_prenom;
//   }
//
//   public function adresse(){
//     return $this->_adresse;
//   }
//   public function getPersonne(){
//     echo 'il est '.$this->prenom(). ' ' .$this->nom().' de '.$this->adresse();
//   }
// }
//
// $personne = new Personne([
//   'nom' => 'silverberg',
//   'prenom' => 'theo',
//   'adresse' => 'castelblanc'
// ]);
// var_dump($personne);
// $personne->setAdresse('Kirov');
// $personne->getPersonne();

//EXO OBJET 4

// class Form{
//   private $_text;
//   private $_submit;
//
//   public function __construct(array $donnees){
//        $this->hydrate($donnees);
//      }
//
//    public function hydrate(array $donnees){
//      foreach ($donnees as $key => $value)
//      {
//        $method = 'set'.ucfirst($key);
//
//        if (method_exists($this, $method))
//        {
//          $this->$method($value);
//        }
//      }
//    }
//
//   public function formulaire(){
//     echo '<form>
//     <fieldset>
//       '.$this->text().'
//     </fieldset>
//     '.$this->submit().'
//     </form>';
//   }
//
//   public function text(){
//     return $this->_text;
//   }
//
//   public function submit(){
//     return $this->_submit;
//   }
//
//   public function setText($text){
//     $this->_text .= $text;
//   }
//   public function setSubmit($submit){
//     $this->_submit = $submit;
//   }
//
// }
//
// $formulaire = new Form([
//   'text'=>'<input type="text" name="input" value="" />',
//   'submit'=>'<input type="submit" name="valide" value="valider" />'
// ]);
// // var_dump($formulaire);
// $formulaire->formulaire();
// $formulaire->setText('<input type="text" name="input" value="" />');

?>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
