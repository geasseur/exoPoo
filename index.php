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
      class Personnage{
        private $_degats; // Les dégâts du personnage.
        private $_experience; // L'expérience du personnage.
        private $_force; // La force du personnage (plus elle est grande, plus l'attaque est puissante).

        public function __construct($force, $experience){
            echo 'voici le constructeur';
            $this->setForce($force);
            $this->setExperience($experience);
            $this->setDegat(0);
        }

        public function force(){
          return $this->_force;
        }
        public function experience(){
          return $this->_experience;
        }
        public function degats(){
          return $this->_degats;
        }
        public function setForce($force){
          if (!is_int($force)) {
            trigger_error('ça doit être un nombre entier',E_USER_WARNING);
            return;
          }
          if ($force > 100) {
            trigger_error('ça doit être plus petit que cent',E_USER_WARNING);
            return;
          }
          $this->_force = $force;
        }

        public function setDegat($degat){
          if (!is_int($degat)) {
            trigger_error('ça doit être un nombre entier',E_USER_WARNING);
            return;
          }
          if ($degat > 100) {
            trigger_error('ça doit être plus petit que cent',E_USER_WARNING);
            return;
          }
          $this->_degats = $degat;
        }

        public function setExperience($experience){
          if (!is_int($experience)) {
            trigger_error('ça doit être un nombre entier',E_USER_WARNING);
            return;
          }
          if ($experience > 100) {
            trigger_error('ça doit être plus petit que cent',E_USER_WARNING);
            return;
          }
          $this->_experience = $experience;
        }

        public function parler(){
          echo 'bonjour';
        }
        public function deplacer(){

        }
        public function frapper(Personnage $persofrapper){
          $persofrapper->_degats = $this->_force;
          echo $persofrapper->_degats. 'points de dégâts';
        }
        public function gagnerExperience(){
          $this->_experience = $this->_experience + 1;
        }
        public function afficheExperience(){
          echo ' le perso a gagné : '. $this->_experience. ' d\'exp. ';
        }
      }
      $perso1 = new Personnage(20,12);
      $perso2 = new Personnage(32,24);

      echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';


// ORIENTE OBJET EXERCICE
// function chargerClasse($classe)
// {
//   require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
// }
//         spl_autoload_register('chargerClasse');
//         $Ville = new Ville('bruxelle','Belgique');
//         $Ville->afficherVille();
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
