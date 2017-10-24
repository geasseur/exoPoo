<?php
function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');

$jeep = new Voiture([
  'immatriculation'=>306,
  'couleur'=>'red',
  'nbPortes'=>3
]);

$car = new Bus([
  'immatriculation'=>432,
  'couleur'=>'blue',
  'nbEtage'=>2
]);

var_dump($jeep);
var_dump($car);
$tabVoiture = [$jeep];
$tabCar = [$car];
foreach ($tabVoiture as $key => $value) {
  ?>
  <h3>voiture</h3>
  <p>immatriculation : <?php echo $value->getImmatriculation(); ?></p>
  <p> couleur : <?php echo $value->getCouleur(); ?></p>
  <p> nbPortes :  <?php echo $value->getNbPortes(); ?> </p>
  <?php
}

foreach ($tabCar as $key => $value) {
  ?>
  <h3>Bus</h3>
  <p> immatriculation : <?php echo $value->getImmatriculation(); ?></p>
  <p> couleur : <?php echo $value->getCouleur(); ?></p>
  <p> nbEtage :  <?php echo $value->getNbEtage(); ?> </p>
  <?php
}
  $jeep->setCouleur('green');
  $car->setNbEtage(3);

  foreach ($tabVoiture as $key => $value) {
    ?>
    <h2>Après Modification</h2>
    <h3>voiture</h3>
    <p>immatriculation : <?php echo $value->getImmatriculation(); ?></p>
    <p> couleur : <?php echo $value->getCouleur(); ?></p>
    <p> nbPortes :  <?php echo $value->getNbPortes(); ?> </p>
    <?php
  }

  foreach ($tabCar as $key => $value) {
    ?>
    <h3>Bus</h3>
    <p> immatriculation : <?php echo $value->getImmatriculation(); ?></p>
    <p> couleur : <?php echo $value->getCouleur(); ?></p>
    <p> nbEtage :  <?php echo $value->getNbEtage(); ?> </p>
    <?php
  }
  ?>
