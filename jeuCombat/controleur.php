<?php
if (isset($_POST['nom']) and !empty($_POST['nom']) and isset($_POST['creer'])) {
  $persoTest = new Personnage([
    'nom'=>$_POST['nom']
  ]);

  $bdd = new PDO('mysql:host=localhost;dbname=exoPoo', 'root', 'root');
  $manager = new PersonnageManager($bdd);

  $manager->add($persoTest);
  var_dump($persoTest);
  var_dump($manager);
}

else if(isset($_POST['utiliser']) && isset($_POST['nom'])) // Si on a voulu utiliser un personnage.
{
  if ($manager->exists($_POST['nom'])) // Si celui-ci existe.
  {
    $perso = $manager->get($_POST['nom']);
  }
  else
  {
    $message = 'Ce personnage n\'existe pas !'; // S'il n'existe pas, on affichera ce message.
  }
} ?>
