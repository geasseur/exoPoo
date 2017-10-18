<?php
if (isset($_POST['nom']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['pelage'])){
  $test = new Chat([
    'nom'=>$_POST['nom'],
    'age'=>$_POST['age'],
    'sexe'=>$_POST['sexe'],
    'pelage'=>$_POST['pelage']
  ]);
  var_dump($test);
  $bdd = new PDO('mysql:host=localhost;dbname=exoPoo', 'root', 'root');
  $manager = new ChatManager($bdd);
  $manager->addChat($test);
} ?>
