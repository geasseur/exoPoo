<?php
require 'personnage.php';

$persoTest = new Personnage([
  'nom'=>'arthas',
  'forcePerso'=>12,
  'degats'=>0,
  'niveau'=>99,
  'experience'=>24
]);

var_dump($persoTest);

$bdd = new PDO('mysql:host=localhost;dbname=exoPoo', 'root', 'root');
$manager = new PersonnageManager($bdd);

$manager->add($persoTest); ?>
