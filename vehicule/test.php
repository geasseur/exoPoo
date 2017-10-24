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

var_dump($jeep);
$manager = $jeep->affiche();
foreach ($manager as $donnees) {
  ?>
   <article class="">
     <p><?php echo $donnees['immatriculation'] ?></p><br>
     <p><?php echo $donnees['couleur'] ?></p><br>
     <p><?php echo $donnees['nbPortes'] ?></p>
   </article>
  <?php
 }
 ?>
