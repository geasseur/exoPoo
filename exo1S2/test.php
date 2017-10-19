<?php
require 'modelexo1.php';
$clio = new Clio([
  'couleur' => 'bleu',
  'portes' => 5
]);
var_dump($clio);
$bdd = new PDO('mysql:host=localhost;dbname=exoPoo', 'root', 'root');
$manager = new ClioManager($bdd);
$manager->addClio($clio); ?>
